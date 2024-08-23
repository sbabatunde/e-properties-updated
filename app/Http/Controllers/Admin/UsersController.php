<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Agent;
use App\Models\Tenant;
use App\Models\Landlord;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Site\ServiceType;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blacklist;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('providers','blacklist')->orderBy('firstname', 'ASC')->paginate(10);
        return view('dashboard.users.index', compact('users'));
    }

    public function admins()
    {
        $adminUsers = User::where('user_type','admin')->orderBy('created_at', 'ASC')->paginate(10);
        return view('dashboard.users.admin', compact('adminUsers'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'user_type' => 'required',
        ]);
        $user_type = $request->user_type;
                dd($request->all());

        if ($user_type == "landlord" || $user_type == "agent") {
            $request->validate([
                'business_name' => 'required|string',
                'business_ID' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'user_type' => 'required',

            ]);
            DB::transaction(function () use ($request, $user_type) {
                $user = User::create([
                    'email' => $request->email,
                    'password' =>  Hash::make($request->password),
                    'user_type' => $request->user_type,
                ]);
                dd($user);
                if ($user_type == "landlord") {
                    Landlord::create([
                        'business_name' => $request->business_name,
                        'business_ID' => $request->business_ID,
                        'user_id' => $user['id']
                    ]);
                } else if($user_type == "agent") {
                    Agent::create([
                        'business_name' => $request->business_name,
                        'business_ID' => $request->business_ID,
                        'user_id' => $user['id']
                    ]);
                }
            });
        } else if ($user_type == "tenant") {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'user_type' => 'required',
            ]);
            DB::transaction(function () use ($request, $user_type) {
                $user = User::create([
                    'email' => $request->email,
                    'password' =>  Hash::make($request->password),
                    'user_type' => $user_type,
                ]);

                Tenant::create([
                    'fullname' => $request->name,
                    'user_id' => $user['id']
                ]);
            });
        } else if ($user_type == "service_provider") {
            $request->validate([
                'business_name' => 'required|string',
                'business_ID' => 'required|string',
                'service_type' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'user_type' => 'required',

            ]);
            DB::transaction(function () use ($request, $user_type) {
                $user = User::create([
                    'email' => $request->email,
                    'password' =>  Hash::make($request->password),
                    'user_type' => $user_type,
                ]);
                ServiceProvider::create([
                    'business_name' => $request->business_name,
                    'business_ID' => $request->business_ID,
                    'user_id' => $user['id'],
                    'service_type_id' => $request->service_type,
                ]);
            });
        }
        Alert::success('Registration Successful', 'Kindly login to proceed.Thank you');
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return redirect()->route('admin.users')->with(['success' => 'The Section has been created']);
        }
        return redirect()->route('admin.users')->with(['error' => 'Something went wrong']);
    }

    public function categoryTypeSearch($slug)
    {
        $items = ServiceType::where('service_category_slug', $slug)->get(); // Fetch items by category ID
        return response()->json($items);
    }

    public function storeUser(Request $request)
    {
        $validate =  Validator::make( $request->all(),[
                'user_type' => 'required',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]);
        if($validate->fails())
        {
            Alert::error('Error',$validate->errors()->first());
        }

        try{
            $user_type = $request->user_type;

            DB::transaction(function () use ($request, $user_type) {
                $user = User::create([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'password' =>  Hash::make($request->password),
                    'user_type' => $user_type,
                ]);

                if ($request->hasFile('photo')) {
                    // Get the file from the request
                    $file = $request->file('photo');
                    // Upload to Cloudinary
                    $cloudinary = new Cloudinary();
                    $uploadResult = $cloudinary->uploadApi()->upload($file->getPathname(), [
                        'folder' => 'e-properties/users', // Optional folder structure in Cloudinary
                        'overwrite' => true
                    ]);
                    // Get the URL of the uploaded file
                    $userPic = $uploadResult['secure_url'];
                }

                if($request->hasFile('photo')){ User::where('id',$user['id'])->update(["photo"=>$userPic]);}

                if ($user_type == "landlord" || $user_type == "agent") {
                    $request->validate([
                        'business_name' => 'required|string',
                        'business_ID' => 'required|string',
                    ]);

                if ($user_type == "landlord") {
                    Landlord::create([
                        'business_name' => $request->business_name,
                        'business_ID' => $request->business_ID,
                        'user_id' => $user['id']
                    ]);
                } else {
                    Agent::create([
                        'business_name' => $request->business_name,
                        'business_ID' => $request->business_ID,
                        'user_id' => $user['id']
                    ]);
                }
                } else if ($user_type == "tenant") {
                    Tenant::create([
                        'fullname' => $request->firstname.' '.$request->lastname,
                        'user_id' => $user['id']
                    ]);
                } else if ($user_type == "service_provider") {
                    $request->validate([
                        'business_name' => 'required|string',
                        'business_ID' => 'required|string',
                        'service_type' => 'required|string',
                    ]);
                    ServiceProvider::create([
                        'business_name' => $request->business_name,
                        'business_ID' => $request->business_ID,
                        'user_id' => $user['id'],
                        'service_type_id' => $request->service_type,
                    ]);
                }
                
            });
            Alert::success('User added Successfully');
            return redirect()->back();
        
        } catch (\Exception $ex) {
            Alert::error('Oops!!!', 'Something went wrong: ' . $ex->getMessage());
            return back();
        }
    }

    public function storeAdmin(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return redirect()->route('admin.users')->with(['success' => 'The Section has been created']);
        }
        return redirect()->route('admin.users')->with(['error' => 'Something went wrong']);
    }

    public function delete($id)
    {
        try {
            $user = User::orderBy('id', 'DESC')->find($id);

            if (!$user) {
                return redirect()->route('admin.users')->with(['error' => 'This section does not exist']);
            }

            $user->delete();

            return redirect()->route('admin.users')->with(['success' => 'The section was deleted successfully']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.users')->with(['error' => 'There is Something Wrong In Session']);
        }
    }

    public function verifyUser($id)
    {
        // Check if a record already exists with the given property_id in Trending table
        $existingTrending = User::where('id', $id)->update(['status'=>'Verified']);
    
          // Return a JSON response indicating success
          return response()->json(['success' => true]);
    }
 
    // public function removeFromTrending($id)
    // {
    //    // Check if a record already exists with the given property_id in Trending table
    //    $existingTrending = Trending::where('property_id', $id)->delete();
    //       // Return a JSON response indicating success
    //       return response()->json(['success' => true]);
    // }
}
