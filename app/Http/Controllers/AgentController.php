<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController
{
    public function index(){

        $agents = Agent::with(['walletTransactions'])->paginate(5);

        $stats = [
            'total' => Agent::count(),
            //'active' => Agent::active()->count(),
            'verified' => Agent::verified()->count(),
            'unverified' => Agent::unverified()->count(),
        ];



        return view('admin.agents', compact('agents', 'stats'));
    }
}
