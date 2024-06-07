<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function viewAgent()
    {
        // $agent = Agent::where('user_id', $id)->first();
        return view('front.users.agents.connect');
    }

    public function allAgents()
    {
        $allAgents = Agent::get();

        return view('front.users.agents.all', compact('allAgents'));
    }
}
