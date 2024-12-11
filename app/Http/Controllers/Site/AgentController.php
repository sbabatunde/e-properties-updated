<?php

namespace App\Http\Controllers\Site;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function viewAgent($id)
    {
        // $agent = Agent::where('user_id', $id)->first();
        return view('front.users.agents.connect');
    }
 
    public function allAgents()
    {
        $allAgents = Agent::with(['user','property'])->get();
        $proffessionals = ServiceType::withCount(['providers'])
        ->with('serviceCategory')
        ->whereDoesntHave('serviceCategory', function ($query) {
            $query->where('category', 'Maintenance');
        })->inRandomOrder()->get();
        // dd($allAgents);
        return view('front.users.agents.all', compact('allAgents','proffessionals'));
    }
}
