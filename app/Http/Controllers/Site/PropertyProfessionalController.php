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
        $propertyProfessionals = User::with(['agent','landlord','providers'])->where('user_type','!=','tenant')->orderBy('firstname','asc')->get();

        return view('front.users.property-professionals.all', compact('propertyProfessionals'));
    }

    public function viewPropertyProfessionals($id)
    {
        $propertyProfessional = User::with(['agent','landlord','providers'])->where('users.id', $id)->first();

        return view('front.users.agents.connect', compact('propertyProfessional'));
    }
}
