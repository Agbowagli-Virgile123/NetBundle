<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Nette\Schema\ValidationException;

class AuthController
{
    public function RegisterUser(Request $request){

        $attributes = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email:unique',
            'password' => 'required|string',
            'phone' => 'required|string',
            'address' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Validate
        $imagePath = '';
        if($request->image){

           $imagePath = $request->image->store('images', 'user');
        }

        User::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'phone' => $attributes['phone'],
            'address' => $attributes['address'],
            'image' => $imagePath,
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request){
        $attributes = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'userType' => 'required|string',
        ]);


        $user = User::where('email', $attributes['email'])->first();

        if(!$user){

            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $request->session()->put('usertype', $attributes['userType']);

        $request->session()->regenerate();

        return redirect()->route('admin/dashboard');
    }

=======
use Illuminate\Validation\Validator;
use App\Http\Controller; 

class AuthController extends Controller
{
    public function UserLogin(Request $request){

        $validated = Validator::make($request->all(),[

        ]);
    }
>>>>>>> 91170f612c8a536e6eb1c1e9a0603472b322b191
}
