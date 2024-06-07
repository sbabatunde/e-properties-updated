<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Landlord;
use App\Models\ServiceProvider;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'user_type' => 'required',
        ]);
        $user_type = $request->user_type;

        if ($user_type == "landlord" || $user_type == "agent") {
            $request->validate([
                'bussiness_name' => 'required|string',
                'bussiness_ID' => 'required|string',
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
                if ($user_type == "landlord") {
                    Landlord::create([
                        'business_name' => $request->bussiness_name,
                        'business_ID' => $request->bussiness_ID,
                        'user_id' => $user['id']
                    ]);
                } else {
                    Agent::create([
                        'business_name' => $request->bussiness_name,
                        'business_ID' => $request->bussiness_ID,
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
                'bussiness_name' => 'required|string',
                'bussiness_ID' => 'required|string',
                'service_provided' => 'required|string',
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
                    'business_name' => $request->bussiness_name,
                    'business_ID' => $request->bussiness_ID,
                    'user_id' => $user['id'],
                    'service_type' => $request->service_type,
                ]);
            });
        }
        Alert::success('Registration Successful', 'Kindly login to proceed.Thank you');
        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function redirect(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('You have successfully logged in');
            return redirect()->route('home')->withSuccess('You have successfully logged in');
        } else {
            Alert::error('Error', 'Your provided credentials do not match in our record.');
            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our record.'
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login')->withSuccess('You have logged out successfully');
    }

    public function updateProfile(Request $request)
    {
        $profile = User::where('id', Auth::id())->update([
            'password' => $request->password,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'country_code' => $request->country_code,
            'phone' => $request->phone,
            'whatApp' => $request->whatApp,
            'state' => $request->state,
            'axis' => $request->axis,
            'about_org' => $request->about_org,
            'org_service' => $request->org_service,
            'org_state' => $request->org_state,
            'org_axis' => $request->org_axis,
            'business_cat' => $request->business_cat,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'linkedIn' => $request->linkedIn,
            'Instagram' => $request->Instagram,
        ]);

        Alert::success('message', 'Congratulations Your Profile has been updated successfully.');

        return back();
    }

    public function editProfile(Request $request)
    {
        $data = User::find(Auth::id());

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('profile/image/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('profile/image'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
    }
}
