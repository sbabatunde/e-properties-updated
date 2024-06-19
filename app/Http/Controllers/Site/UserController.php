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
        // dd(Hash::make($request->password));
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

   
}
