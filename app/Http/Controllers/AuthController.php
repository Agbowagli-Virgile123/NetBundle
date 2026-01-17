<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController
{
    public function store(Request $request){

        $attributes = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email:unique',
            'password' => 'required|string',
            'phone' => 'required|string',
            'address' => 'string',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Validate
        if($request->image){

           $imagePath = $request->image->store('uploads', 'user');
        }

        $user = User::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'phone' => $attributes['phone'],
            'address' => $attributes['address'],
            'image_path' => $imagePath,
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request){
        $attributes = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'userType' => 'required|string',
        ]);

        if($attributes['userType'] == 'admin'){
            $guard = 'web';
            $redirect = '/admin/dashboard';
        }else{
            $guard = 'agent';
            $redirect = '/agent/dashboard';
        }

        if(!Auth::guard($guard)->attempt([
            'email' => $attributes['email'],
            'password' => $attributes['password'],
        ])){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $request->session()->regenerate();

        return redirect($redirect);
    }


    public  function logout(Request $request){

        Auth::guard('web')->logout();
        Auth::guard('agent')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}


//To get the user that logs in we do:
//Auth::guard('web')->user();    // admin
//Auth::guard('agent')->user();  // agent

