<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;

class PropertyProfessionalController extends Controller
{
    public function allPropertyProfessionals()
    {
        $propertyProfessionals = User::with(['agent','landlord','providers'])
        ->where('user_type','<>','tenant')->where('user_type','<>','admin')->orderBy('firstname','asc')->get();

        return view('front.users.property-professionals.all', compact('propertyProfessionals'));
    }

    public function viewPropertyProfessionals($id)
    {
        $propertyProfessional = User::with(['property','providers'])->where('users.id', $id)->first();

        $similarProfs = User::with(['property'])->where('user_type',$propertyProfessional->user_type)
        ->where('users.id','<>',$propertyProfessional->id)->get();
        return view('front.users.agents.connect', compact('propertyProfessional','similarProfs'));
    }
}
