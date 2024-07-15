<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function getLogin()
    {
        // return view('dashboard.auth.login');
        return view('dashboard.auth.essential.login');
    }

    
    public function Adminlogin(AdminLoginRequest $request)
    {

        // return $request;
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials) &&  Auth::user()->isAdmin()) {
        // if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {

            return redirect()->route('admin.dashboard')->with(['success' => 'Login successfully']);
        }

        return Redirect()->route('get.essential.admin.login')->with(['error' => 'Error,wrong Admin Credentials.']);
    }

    public function logout()
    {
        $guard = $this->getGuard();
        $guard->logout();
        return redirect()->route('admin.login');
    }

    private function getGuard()
    {
        return auth('admin');
    }
}
