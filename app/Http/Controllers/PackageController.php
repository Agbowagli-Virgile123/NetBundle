<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Package;
use App\Models\PackageTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    public function show(Package $package)
    {
         return response()->json($package);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'network_id' => 'required|exists:networks,id',
            'tag' => 'required|exists:package_tags,id',
            'type' => ['required', Rule::in(['Daily', 'Weekly', 'Monthly'])],
            'data_size' => 'required|numeric',
            'data_unit' => ['required', Rule::in(['MB', 'GB'])],
            'validity_value' => 'required|numeric',
            'validity_unit' => ['required', Rule::in(['Hours', 'Days','Months'])],
            'price' => 'required|numeric|min:0|gte:cost',
            'agent_price' => 'nullable|numeric|min:0|gte:cost|lte:price',
            'cost' => 'required|numeric|min:0',
            'code' => 'nullable|string|max:100',
            'limit' => 'nullable|integer|min:1',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
        ]);

        if($validator->fails()){
            return redirect('/admin/packages')
                ->withErrors($validator, 'addPackage')
                ->withInput();
        }

        $network = Network::find($request->network_id);

        $name = $network->name.' '.$request['data_size'].$request['data_unit'].' '.$request['type'].' '.'Bundle';
        $validity = $request['validity'].' '.$request['validity_unit'];
        $data_amount = $request['data_size'].$request['data_unit'];

        Package::create([
            'network_id' => $request["network_id"],
            'package_tag_id' => $request["tag"],
            'name' => $name,
            'data_amount' => $data_amount,
            'cost_price' => $request["cost"],
            'selling_price' => $request["price"],
            'agent_price' => $request["agent_price"],
            'validity' => $validity,
            'description' => $request["description"],
            'is_active' => $request->boolean('is_active'),
            'package_code' => $request['code'],
            'stock_limit' => $request['limit'],
        ]);

        return redirect('/admin/packages')
            ->with('success', 'Package created successfully!');

    }

    public function update(Request $request, Package $package){
        $validator = Validator::make($request->all(),[
            'network_id' => 'required|exists:networks,id',
            'tag' => 'required|exists:package_tags,id',
            'type' => ['required', Rule::in(['Daily', 'Weekly', 'Monthly'])],
            'data_size' => 'required|numeric',
            'data_unit' => ['required', Rule::in(['MB', 'GB'])],
            'validity_value' => 'required|numeric',
            'validity_unit' => ['required', Rule::in(['Hours', 'Days','Months'])],
            'price' => 'required|numeric|min:0|gte:cost',
            'agent_price' => 'nullable|numeric|min:0|gte:cost|lte:price',
            'cost' => 'required|numeric|min:0',
            'code' => 'nullable|string|max:100',
            'limit' => 'nullable|integer|min:1',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
        ]);

        if($validator->fails()){
            return redirect('/admin/packages')
                ->withErrors($validator, 'editPackage')
                ->withInput();
        }

        $network = Network::find($request->network_id);

        $name = $network->name.' '.$request['data_size'].$request['data_unit'].' '.$request['type'].' '.'Bundle';
        $validity = $request['validity'].' '.$request['validity_unit'];
        $data_amount = $request['data_size'].$request['data_unit'];

        $package->update([
            'network_id' => $request["network_id"],
            'package_tag_id' => $request["tag"],
            'name' => $name,
            'data_amount' => $data_amount,
            'cost_price' => $request["cost"],
            'selling_price' => $request["price"],
            'agent_price' => $request["agent_price"],
            'validity' => $validity,
            'description' => $request["description"],
            'is_active' => $request->boolean('is_active'),
            'package_code' => $request['code'],
            'stock_limit' => $request['limit'],
        ]);

        return redirect('/admin/packages')
            ->with('success', 'Package updated successfully!');

    }

    public function destroy(Package $package)
    {
        // Check if package has orders
//        if ($package->orders()->count() > 0) {
//            return back()->with('error', 'Cannot delete package with existing orders. Deactivate instead.');
//        }

        $package->delete();

        return redirect('/admin/packages')
            ->with('success', 'Package deleted successfully!');
    }
}
