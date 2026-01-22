<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\NoReturn;

class NetworkController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networks = Network::paginate(3);

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
    #[NoReturn]
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'code' => 'required|string|unique:networks,code|regex:/^\S+$/',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'is_active' => 'boolean',
            'sort_order' => 'required|integer|unique:networks,sort_order',
        ]);


        if ($validator->fails()) {
            return redirect('/admin/networks')
                ->withErrors($validator, 'addNetwork')
                ->withInput();
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('uploads/network', 'public');
        }


        Network::create([
            'name' => $request->name,
            'code' => $request->code,
            'logo' => $logo ?? null,
            'primary_color' => $request->primary_color,
            'secondary_color' => $request->secondary_color,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $request->sort_order,
        ]);

        return redirect('/admin/networks')
            ->with('success', 'Network created successfully');

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
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'code' => ['required','string',Rule::unique('networks', 'code')->ignore($network->id),'regex:/^\S+$/'],
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'is_active' => 'boolean',
            'sort_order' => ['required','string',Rule::unique('networks', 'sort_order')->ignore($network->id)],
        ]);


        if ($validator->fails()) {
            return redirect('/admin/networks')
                ->withErrors($validator, 'editNetwork')
                ->withInput();
        }


        if ($request->hasFile('logo')) {

            if($network->logo){

                unlink(storage_path('/app/public/'.$network->logo));
            }

            $logo = $request->file('logo')->store('uploads/network', 'public');

        }else{

            $logo = $network->logo;
        }

        $network->update([
            'name' => $request->name,
            'code' => $request->code,
            'logo' => $logo ?? null,
            'primary_color' => $request->primary_color,
            'secondary_color' => $request->secondary_color,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $request->sort_order,
        ]);

        return redirect('/admin/networks')
            ->with('success', 'Network updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    #[NoReturn]
    public function destroy(Network $network)
    {

        if($network->logo){
            unlink(storage_path('/app/public/'.$network->logo));
        }

        $network->delete();

        return redirect('/admin/networks')->with('success', 'Network deleted successfully');
    }
}
