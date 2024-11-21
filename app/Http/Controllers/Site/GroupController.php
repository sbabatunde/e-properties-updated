<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\User;
use App\Models\Comment;
use Jorenvh\Share\Share;
use App\Models\Site\Group;
use Illuminate\Http\Request;
use App\Models\Site\GroupPost;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::withCount(['members','posts'])->with(['members','posts'])->orderBy('created_at','desc')->get();
        $knownPosts = GroupPost::whereNotNull('user_id')->with(['user','comments','user.serviceTypes'])->orderBy('created_at','desc')->get();
        $anonymousPosts = GroupPost::whereNull('user_id')->with(['user','comments','comments.user','user.serviceTypes'])->orderBy('created_at','desc')->get();
        
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
        // End of Share Group 
        return view('front.users.groups.index',compact('groups','knownPosts','anonymousPosts','shareLinks'));
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
        // Ensure 'anonymous' is treated as a boolean
        $anonymous = filter_var($request->input('anonymous', false), FILTER_VALIDATE_BOOLEAN);
    
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
            $comment->user_id = auth()->id();  // Store the logged-in user's ID
            $comment->group_post_id = $groupPost->id;  // Attach the comment to the group post
            $comment->save();
          
            // Show success message using Toastr
            Toastr::success('Comment added successfully!', 'Success');
      
        } catch (\Exception $e) {
            // Show error message using Toastr
            Toastr::error('Failed to add the comment. Please try again.', 'Error');
        }
      
        // Redirect back to the post or group page
        return redirect()->route('group.index', );
    }
    
}
