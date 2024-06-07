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
        $propertyProfessionals = User::leftjoin('agents as a', 'a.user_id', '=', 'users.id')
            ->leftjoin('landlords as l', 'l.user_id', '=', 'users.id')->where('users.user_type', 'agent')
            ->orwhere('users.user_type', 'landlord')->get();

        return view('front.users.property-professionals.all', compact('propertyProfessionals'));
    }

    public function viewPropertyProfessionals($id)
    {
        $propertyProfessional = User::leftjoin('agents as a', 'a.user_id', '=', 'users.id')
            ->leftjoin('landlords as l', 'l.user_id', '=', 'users.id')->where('users.id', $id)->get();

        return view('front.users.agents.connect', compact('propertyProfessional'));
    }
}
