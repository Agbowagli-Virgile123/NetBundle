<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController
{
    public function index(){
        $packages = Package::with(['network', 'packageTag'])->paginate(5);

        $activePackages = Package::where('is_active', 1)->count();
        $inactivePackages = Package::where('is_active', 0)->count();

        return view('admin.packages', compact(['packages', 'activePackages', 'inactivePackages']));
    }
}
