<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:agents'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required'],
            'phone_number' => ['required', 'digits:9', 'unique:agents'],
            'whatsapp_number' => ['required', 'digits:9', 'unique:agents'],
            'mobile_money_network' => ['required'],
            'mobile_money_number' => ['required', 'digits:9', 'unique:agents'],
            'id_type' => ['required'],
            'id_number' => ['required', 'unique:agents'],
            'region' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'reason' => ['nullable'],
            'have_sales_experience' => ['required', 'boolean'],
            'way_of_hearing_us' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Agent::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            'mobile_money_network' => $request->mobile_money_network,
            'mobile_money_number' => $request->mobile_money_number,
            'id_type' => $request->id_type,
            'id_number' => $request->id_number,
            'region' => $request->region,
            'city' => $request->city,
            'address' => $request->addrress,
            'reason' => $request->reason,
            'have_sales_experience' => $request->boolean('have_sales_experience'),
        ]);

        return redirect('/apply-agent')->with('success', 'Agent Created Successfully!');
    }
}
