<?php

namespace App\Http\Controllers;

use App\Models\User;

class LoginController extends Controller
{
    /**
     * 
     */
    public function login($request) 
    {
        $userName = $request->user_name;
        $password = $request->password;
        $pass = User::where('name', $userName)->first()->password;
    }
}