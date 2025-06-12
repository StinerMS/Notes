<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\dd;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // Form validation
        $request->validate([
            'text-username' => 'required',
            'text-password' => 'required'
        ]);

        // Get user input

        $username = $request->input('text-username');
        $password = $request->input('text-password');

        echo 'ok!';
    }

    public function logout()
    {
        return view('logout');
    }
}
