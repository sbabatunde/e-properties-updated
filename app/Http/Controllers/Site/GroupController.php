<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\User;
use App\Models\Comment;
use Jorenvh\Share\Share;
use App\Models\Site\Group;
use App\Models\Site\Follow;
use Illuminate\Http\Request;
use App\Models\Site\GroupPost;
use App\Models\Site\GroupMember;
use Illuminate\Support\Facades\DB;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::withCount(['members','posts'])->with(['members','posts'])->orderBy('created_at','desc')->get();
        $knownPosts = GroupPost::whereNotNull('user_id')->with(['user','likes','comments','user.serviceTypes'])->orderBy('created_at','desc')->paginate(2);
        $anonymousPosts = GroupPost::whereNull('user_id')->with(['user','likes','comments','comments.user','user.serviceTypes'])->orderBy('created_at','desc')->paginate(2);
        //Retrieve all group members and paginate
        $members = GroupMember::with('user')->paginate(6);
        //For Sharing group
             // Generate the profile URL
        $profileUrl = route('group.index');
        // Create share links
        $share = new Share;
        $shareLinks = $share->page($profileUrl,'join-groups')
                            ->facebook()
                            ->twitter()
                            ->linkedin()
                            ->telegram()
                            ->whatsapp()        
                            ->reddit()
                            ->getRawLinks();
        $sharePosts = $share->page($profileUrl,'check-out post')
                            ->facebook()
                            ->twitter()
                            ->linkedin()
                            ->telegram()
                            ->whatsapp()        
                            ->reddit()
                            ->getRawLinks();
        
        // End of Share Group 
        return view('front.users.groups.index',compact('groups','knownPosts','anonymousPosts','shareLinks','members','sharePosts'));
    }

    public function join(Request $request)
    {
        if (!auth()->check()) {
            Toastr::error('You must be logged in to join a group.', 'Authentication Required');
            return back();
        }
    
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'user_id' => 'required|exists:users,id',
        ]);
    
        try {
            $group = Group::findOrFail($request->group_id);
            $user = auth()->user();
    
            if ($group->members()->where('user_id', $user->id)->exists()) {
                Toastr::warning('You are already a member of this group.', 'Warning');
                return back();
            }
    
            $group->members()->attach($user);
    
            Toastr::success('You have successfully joined the group!', 'Success');
            return back();
    
        } catch (Exception $e) {
            Toastr::error( $e->getMessage(), 'Error');
            // \Log::error('Group join error: ' . $e->getMessage());
            return back();
        }
    }
    
    public function post (Request $request)
    {
        // dd($request->all());dd
        // Ensure 'anonymous' is treated as a boolean
        $anonymous = filter_var($request->input('annonymous', false), FILTER_VALIDATE_BOOLEAN);
    
        try {
            // Validate the request
            $validatedData = $request->validate([
                'post' => 'required|string|max:1000',
                'anonymous' => 'sometimes|boolean',  // Optional anonymous checkbox
            ]);
    
            // Check if the post is not anonymous and validate that the user is authenticated
            if (!$anonymous && !auth()->check()) {
                throw new \Exception('You must be logged in to post.');
            }
    
            // Create a new post
            $post = new GroupPost();
            $post->post = $validatedData['post'];
    
            // Set the anonymous flag
    
            // If the post is not anonymous, save the user_id
            if (!$anonymous) {
                $post->user_id = auth()->id();  // Store the logged-in user's ID
            }
    
            // Save the post to the database
            $post->save();
    
            // Success message
            Toastr::success('Post created successfully!', 'Success');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            $errors = $e->errors(); // Get the validation errors
            foreach ($errors as $field => $messages) {
                foreach ($messages as $message) {
                    Toastr::error($message, 'Validation Error');
                }
            }
        } catch (\Exception $e) {
            // General error message (not validation-related)
            Toastr::error($e->getMessage(), 'Error');
        }
    
        // Redirect back to the previous page
        return redirect()->back();
    }

    public function comment(Request $request, $groupPostId)
    {
        // Validate comment content
        $validatedData = $request->validate([
            'content' => 'required|string|max:1000',  // Adjust the validation rules as needed
        ]);

        // Find the group post
        $groupPost = GroupPost::findOrFail($groupPostId);

        // Ensure the comment belongs to the correct group
        $group = $groupPost->group;  // Get the group for the post

        try {
            // Create the comment
            $comment = new Comment();
            $comment->content = $validatedData['content'];
            // Check if the comment is anonymous
            if (!auth()->check()) {
                $comment->user_id = null;  // Set user_id to null for anonymous comments
            } else {
                $comment->user_id = auth()->id();  // Store the logged-in user's ID for known comments
            }
            $comment->group_post_id = $groupPost->id;  // Attach the comment to the group post
            $comment->save();

            // Increment the views count on the post
            $groupPost->increment('views');
            $comment->increment('views');

            // Show success message using Toastr
            Toastr::success('Comment added successfully!', 'Success');
        } catch (\Exception $e) {
            // Show error message using Toastr
            Toastr::error('Failed to add the comment. Please try again.', 'Error');
        }

        // Redirect back to the post or group page
        return redirect()->route('group.index');
    }


    public function replyToComment(Request $request, $commentId)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $comment = Comment::findOrFail($commentId);

        $reply = $comment->replies()->create([
            'user_id' => auth()->id() ?? null,
            'content' => $request->input('content'),
            'group_post_id'=>$comment->group_post_id

        ]);
        $post = GroupPost::findOrFail($comment->group_post_id);
        $post->increment('views');
        $comment->increment('views');
        
        return response()->json([
            'success' => true,
            'reply' => $reply,
            'user' => $reply->user, // Include the user details
        ]);
    }
    
    public function toggleLike($type, $id)
    {
        if(!auth()->check())
        {
            try {
                $ipAddress = request()->ip(); // Use IP address to identify anonymous user
                $liked = false;
    
                // Determine the type of entity
                $entity = null;
                if ($type == 'post') {
                    $entity = GroupPost::findOrFail($id);
                    $entity->increment('views');
                } elseif ($type == 'comment') {
                    $entity = Comment::findOrFail($id);
                    $entity->increment('views');
                    $post = GroupPost::findOrFail($entity->group_post_id);
                    $post->increment('views');
                } else {
                    return response()->json(['error' => 'Invalid type'], 400);
                }
    
                // Check if the anonymous user has already liked this entity
                $like = $entity->likes()->where('ip_address', $ipAddress)->first();
    
                if ($like) {
                    // If already liked, unlike it
                    $like->delete();
                } else {
                    // Create a new like
                    $entity->likes()->create(['ip_address' => $ipAddress]);
                    $liked = true;
                }
    
                // Return response with updated like count and liked status
                return response()->json([
                    'likesCount' => $entity->likes()->count(),
                    'liked' => $liked,
                ]);
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                return response()->json(['error' => 'Entity not found'], 404);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Server error'], 500);
            }
        }
        else{
            try {
                $user = auth()->user() ?? null;
                $liked = false;
        
                // Determine the type of entity
                $entity = null;
                if ($type == 'post') {
                    $entity = GroupPost::findOrFail($id);
                    $entity->increment('views');
                } elseif ($type == 'comment') {
                    $entity = Comment::findOrFail($id);
                    $entity->increment('views');
                    $post = GroupPost::findOrFail($entity->group_post_id);
                    $post->increment('views');
                } else {
                    return response()->json(['error' => 'Invalid type'], 400);
                }
        
                // Check if the user already liked the entity
                $like = $entity->likes()->where('user_id', $user->id)->first();
        
                if ($like) {
                    // If already liked, unlike it
                    $like->delete();
                } else {
                    // Create a new like
                    $entity->likes()->create(['user_id' => $user->id]);
                    $liked = true;
                }
        
                // Return response with updated like count and liked status
                return response()->json([
                    'likesCount' => $entity->likes()->count(),
                    'liked' => $liked,
                ]);
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                return response()->json(['error' => 'Entity not found'], 404);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Server error'], 500);
            }
        }
        
    }
    
    // for anonnymous toggle
    public function toggleAnonymousLike($type, $id)
    {
        try {
            $ipAddress = request()->ip(); // Use IP address to identify anonymous user
            $liked = false;

            // Determine the type of entity
            $entity = null;
            if ($type == 'post') {
                $entity = GroupPost::findOrFail($id);
                $entity->increment('views');
            } elseif ($type == 'comment') {
                $entity = Comment::findOrFail($id);
                $entity->increment('views');
                $post = GroupPost::findOrFail($entity->group_post_id);
                $post->increment('views');
            } else {
                return response()->json(['error' => 'Invalid type'], 400);
            }

            // Check if the anonymous user has already liked this entity
            $like = $entity->likes()->where('ip_address', $ipAddress)->first();

            if ($like) {
                // If already liked, unlike it
                $like->delete();
            } else {
                // Create a new like
                $entity->likes()->create(['ip_address' => $ipAddress]);
                $liked = true;
            }

            // Return response with updated like count and liked status
            return response()->json([
                'likesCount' => $entity->likes()->count(),
                'liked' => $liked,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Entity not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error'], 500);
        }
    }

    public function connectMember($id)
    {
        // Get the currently authenticated user

        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized. Login to connect to user'], 401);
        }
        else{
            $user = auth()->user()->id;
            // Find the user to follow
            $alreadyfollow = Follow::where('following_id',$id)->where('follower_id',$user)->first();
            $userToFollow = User::findOrFail($id);
            // Check if already following
            if (!$alreadyfollow) {
                Follow::create([
                    'follower_id'=>$user,
                    'following_id'=>$id,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]);
                $userToFollow->increment('followers_count');

                return response()->json(['success' => true, 'message' => 'You are now following'
                .' ' .auth()->user()->firstname.' '.  auth()->user()->lastname]);
            }

            return response()->json(['success' => false, 'message' => 'You are already following this user.']);
        }
    }
}
