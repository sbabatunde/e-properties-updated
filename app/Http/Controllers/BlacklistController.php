<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Blacklist;

class BlacklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allBlacklist()
    {
        $blacklisted['Landlords'] = Blacklist::with(['reporter','reported','blacklister'])
                                    ->where('category','landlord')->get();
        $blacklisted['Tenants'] = Blacklist::with(['reporter','reported','blacklister'])
                                    ->where('category','tenant')->get();
        $blacklisted['Agents'] = Blacklist::with(['reporter','reported','blacklister'])
                                    ->where('category','agent')->get();
        $blacklisted['Properties'] = Blacklist::with(['reporter','reportedProperty','reportedProperty.agent','blacklister'])
                                    ->where('category','property')->get();

        return view('front.users.blacklist.main-page',compact('blacklisted'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blacklist $blacklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blacklist $blacklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blacklist $blacklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blacklist $blacklist)
    {
        //
    }
}
