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
        $networks = Network::all();

        $allcount = $networks->count();
        $activecount = $networks->where('is_active', "=",1)->count();
        $inactivecount = $networks->where('is_active',"=", 0)->count();

        return view('admin.networks', compact(['networks', 'allcount', 'activecount', 'inactivecount']));
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
