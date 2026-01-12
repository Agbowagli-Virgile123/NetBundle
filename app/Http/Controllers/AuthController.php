<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Validator;
use App\Http\Controller; 

class AuthController extends Controller
{
    public function UserLogin(Request $request){

        $validated = Validator::make($request->all(),[

        ]);
    }
}
