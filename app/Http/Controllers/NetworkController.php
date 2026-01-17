<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networks = Network::paginate(2);

        $activecount = Network::where('is_active', "=",1)->count();
        $inactivecount = Network::where('is_active',"=", 0)->count();

        return view('admin.networks', compact(['networks', 'activecount', 'inactivecount']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required|string',
            'code' => 'required|string|unique:networks',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
            'sort_order' => 'required|integer|unique:networks',
        ]);

        dd($attributes);

        if ($request->hasFile('logo')) {
            $logo = $request->logo->store('networks', 'public');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Network $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Network $network)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Network $network)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Network $network)
    {
        //
    }
}
