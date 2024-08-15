<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Models\Agent;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyProfessionalController extends Controller
{
    public function allPropertyProfessionals()
    {
        $propertyProfessionals = User::with(['agent','landlord','providers'])
        ->where('user_type','<>','tenant')->where('user_type','<>','admin')->orderBy('firstname','asc')->get();

        return view('front.users.property-professionals.all', compact('propertyProfessionals'));
    }

    public function viewPropertyProfessionals(Request $request, $id)
    {
        $propertyProfessional = User::with(['property', 'providers'])->findOrFail($id);

        // Generate the profile URL
        $profileUrl = route('property.professionals.view', ['id' => $id]);

        // Create share links
        $share = new Share;
        $shareLinks = $share->page($profileUrl, $propertyProfessional->name)
                            ->facebook()
                            ->twitter()
                            ->linkedin()
                            ->telegram()
                            ->whatsapp()        
                            ->reddit()
                            ->getRawLinks();

        $similarProfs = User::with(['property'])
                            ->where('user_type', $propertyProfessional->user_type)
                            ->where('users.id', '<>', $propertyProfessional->id)
                            ->get();

        return view('front.users.agents.connect', compact('propertyProfessional', 'similarProfs', 'shareLinks'));
    }

    public function messagePropertyProfessional(Request $request, $id)
    {
        dd($request->all());

        return redirect()->route('property.professionals.connect');
    }
}
