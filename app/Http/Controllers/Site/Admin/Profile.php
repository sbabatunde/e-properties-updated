<?php

namespace App\Http\Controllers\Site\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile as AdminProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Profile extends Controller
{

    public function adminProfile()
    {
        if (Auth::id()) {
            $user = User::find(Auth::id());
            return view('admin.profile.main', compact('user'));
        } else {
            Alert::error('Access Denied!!!', 'You need to login in first');
            return redirect()->route('user.login');
        }
    }

    public function adminEditProfile(Request $request, $userID)
    {
        AdminProfile::create([
            "firstname" => $request->f_name,
            "lastname" => $request->l_name,
            "business_name" => $request->bus_name,
            "business_image" => $request->busi_img,
            "password" => $request->password,
            "country_code" => $request->country_code,
            "phone" => $request->phone,
            "whatApp" => $request->whatsApp_no,
            "email" => $request->email,
            "state" => $request->state,
            "axis" => $request->axis,
            "org_desc" => $request->org_desc,
            "org_service" => $request->org_service,
            "org_state" => $request->busi_state,
            "org_axis" => $request->busi_axis,
            "busi_cat" => $request->busi_cat,
            "fb" => $request->fb,
            "twitter" => $request->twitter,
            "linkedIn" => $request->linked_in,
            "instagram" => $request->instagram,
        ]);
    }
}
