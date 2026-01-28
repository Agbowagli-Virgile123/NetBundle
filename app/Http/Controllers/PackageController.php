<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Package;
use App\Models\PackageTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController
{
    public function index(){
        $packages = Package::with(['network', 'packageTag'])->paginate(5);
        $activePackages = Package::where('is_active', 1)->count();
        $inactivePackages = Package::where('is_active', 0)->count();
        $networks = Network::all();
        $tags = PackageTag::all();

        return view('admin.packages', compact(['packages', 'activePackages', 'inactivePackages','networks', 'tags']));
    }

    public function store(Request $request){
        $attributes = Validator::make($request->all(),[
            'network_id' => 'required|exists:networks,id',
            'tag' => 'required|exists:package_tags,id',
            'name' => 'required|string|max:255',
            'data_amount' => 'required|string|max:50',
            'cost_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0|gte:cost_price',
            'agent_price' => 'nullable|numeric|min:0|gte:cost_price|lte:selling_price',
            'validity' => 'required|string|max:100',
            'validity_days' => 'nullable|integer|min:1',
            'description' => 'nullable|string|max:1000',
            'code' => 'nullable|string|max:100',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
            'stock_limit' => 'nullable|integer|min:1'
        ]);
    }
}
