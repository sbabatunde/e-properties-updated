<?php

namespace App\Http\Controllers\Site\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use App\Http\Requests\ProfileRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Admin\Profile as AdminProfile;

class Profile extends Controller
{

    public function adminProfile()
    {
        if (Auth::id()) {
            $user = User::find(Auth::id());
            $data['user']= User::with(['agent','landlord','providers'])->find(Auth::id());
            return view('admin.profile.main', $data);
        } else {
            Alert::error('Access Denied!!!', 'You need to login in first');
            return redirect()->route('user.login');
        }
    }

    public function adminEditProfile(ProfileRequest $request)
    {
        // The incoming request is validated at this point
        // Access validated data using $request->validated()
        // Process the request further (e.g., save to database)
        //Insert Amenities
        if ($request->file('busi_img')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('busi_img')
                ->getClientOriginalExtension();
            $img = $manager->read($request->file('busi_img'));
            $img = $img->resize(250, 250);

            $img->toJpeg(80)->save(base_path('public/assets/admin/profile/business_image/' .
                $name_gen));
            $uploadPath = '/assets/admin/profile/business_image/' . $name_gen;
        }
        
        $profile = User::where('id', Auth::id())->update([
            'password' => Hash::make($request->password),
            'firstname' => $request->f_name,
            'lastname' => $request->l_name,
            'experience' => $request->experience,
            'business_name' => $request->bus_name,
            'business_image' => $uploadPath,
            'country_code' => $request->country_code,
            'phone' => $request->phone,
            'whatApp' => $request->whatsApp_no,
            'state' => $request->state,
            'axis' => $request->axis,
            'about_org' => $request->org_desc,
            'org_service' => $request->org_service,
            'org_state' => $request->busi_state,
            'org_axis' => $request->busi_axis,
            'business_cat' => $request->business_cat,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'linkedIn' => $request->linked_in,
            'Instagram' => $request->instagram,
        ]);

        Alert::success('Success', 'Congratulations Your Profile has been updated successfully.');

        return back();
    }

    public function adminAddititionalEditProfile(Request $request)
    {
        $request->validate([
            'photo' => 'mimes:jpg,png|max:3072|required'
        ]);

        if ($request->file('photo')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('photo')
                ->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'));
            $img = $img->resize(250, 250);

            $img->toJpeg(80)->save(base_path('public/assets/admin/images/photo/' .
                $name_gen));
            $uploadPath = '/assets/admin/images/photo/' . $name_gen;
        }
        $data = User::where('id',Auth::id())->update(['photo'=>$uploadPath]);
        Alert::success('Success', 'Congratulations Your Profile picture uploaded successfully.');

        return back();
    }
}
