<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Site\Group;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use App\Models\Site\GroupMember;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;

class GroupController extends Controller
{
    public function index()
    {
        // Fetch all groups from the database
        $groups = Group::withCount(['members'])->get();

        // Return the view with the groups data
        return view('admin.user.groups.index', compact('groups'));   
    }

    public function create()
    {
        return view('admin.user.groups.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'group_name' => 'required|string|max:255',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png,gif,avif|max:2048', // Adjust file types and size as needed
        ]);

        // Handle the file upload if a file is selected
        $photoPath = null;

        // Check if a file is uploaded
        if ($request->hasFile('photo')) {
            // Get the file from the request
            $file = $request->file('photo');
            
            // Upload to Cloudinary
            $cloudinary = new Cloudinary();
             // Use ImageManager from Intervention Image
             $manager = new ImageManager(new Driver()); // or 'imagick'
             $file = $request->file('photo');
             $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();

             // Process the image
             $img = $manager->read($file->getPathname());
             $img->resize(450, 450, function ($constraint) {
                 $constraint->aspectRatio();
                 $constraint->upsize();
             });

             // Save the image to a temporary location
             $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
             $img->save($tempFilePath); // Encode the image to JPEG format

             
            $uploadResult = $cloudinary->uploadApi()->upload($file->getPathname(), [
                'folder' => 'e-properties/groups', // Optional folder structure in Cloudinary
                'overwrite' => true
            ]);
                 // Get the URL of the uploaded file
                $photoPath = $uploadResult['secure_url'];
        }
        // Create a new group record in the database
        $group = new Group();
        $group->group_name = $request->input('group_name');
        $group->photo = $photoPath; // Save the file path to the 'photo' column
        $group->save();
        
        Alert::success('Success', 'Group created successfully');
        // Redirect back with a success message
        return redirect()->route('admin.group.create')->with('success', 'Group created successfully.');
    }

    public function edit(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'group_name' => 'required|string|max:255',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png,gif,avif|max:2048', // 'nullable' allows skipping file upload
        ]);
    
        try {
            // Find the group by ID
            $group = Group::findOrFail($id);
    
            // Handle the file upload if a new file is selected
            $photoPath = $group->photo; // Keep the existing photo path by default
    
            // Check if a new file is uploaded
            if ($request->hasFile('photo')) {
                // Get the file from the request
                $file = $request->file('photo');
    
                // Upload to Cloudinary
                $cloudinary = new Cloudinary();
                $manager = new ImageManager(new Driver()); // Use ImageManager from Intervention Image
    
                // Generate a unique file name
                $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
    
                // Process the image
                $img = $manager->read($file->getPathname());
                $img->resize(450, 450, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
    
                // Save the image to a temporary location
                $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
                $img->save($tempFilePath);
    
                // Upload to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($tempFilePath, [
                    'folder' => 'e-properties/groups', // Optional folder structure in Cloudinary
                    'overwrite' => true
                ]);
    
                // Get the URL of the uploaded file
                $photoPath = $uploadResult['secure_url'];
            }
    
            // Update the group record in the database
            $group->group_name = $request->input('group_name');
            $group->photo = $photoPath; // Save the updated file path to the 'photo' column
            $group->save();
    
            // Success response
            Alert::success('Success', 'Group updated successfully');
            return redirect()->route('admin.group.index')->with('success', 'Group updated successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Group update failed: '.$e->getMessage());
    
            // Display a friendly error message to the user
            return redirect()->back()->withErrors('An error occurred while updating the group. Please try again.');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $users = User::where(function($q) use($query){
            $q->where('firstname', 'LIKE', "%{$query}%")->orwhere('lastname', 'LIKE', "%{$query}%")
        ;})
        ->get(['id', 'firstname','lastname']); // Adjust as necessary

        return response()->json($users);
    }

    public function storeMembers(Request $request, $groupId)
    {
        try {
            $validated = $request->validate([
                'user_ids' => 'required|array',
                'user_ids.*' => 'exists:users,id',
            ]);
        
            foreach ($validated['user_ids'] as $userId) {
                GroupMember::create([
                    'group_id' => $groupId,
                    'user_id' => $userId,
                ]);
            }
            
            Alert::success('Success', 'Group members added successfully.');
            return redirect()->route('admin.group.index');
        } catch (\Exception $e) {
            // Log the error message if needed
            \Log::error('Failed to add group members: ' . $e->getMessage());
            
            // Set an error message for the user
            Alert::error('Error', 'There was a problem adding group members. Please try again.');
            
            return redirect()->back()->withInput(); // Redirect back with input data
        }
    }

    public function viewMembers($groupId)
    {
        // Fetch the group and its members
        $group = Group::findOrFail($groupId);

        // Fetch members with pagination
        $members = $group->members()->paginate(10); // Change 10 to the desired number of items per page
    
        // dd($group);
        return view('admin.user.groups.view_members', compact('group','members'));
    }

    public function destroyMember($groupId, $memberId)
    {
        $member = GroupMember::where('group_id', $groupId)->where('user_id', $memberId)->firstOrFail();
        $member->delete();

        Alert::success('success', 'Member removed successfully.');
        return redirect()->route('admin.group.view.members', $groupId);
    }
}
