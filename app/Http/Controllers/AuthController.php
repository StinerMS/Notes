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
        echo $request->input('text-username');
        echo '<br>';
        echo $request->input('text-password');
        echo '<br>';

        dd($request);

        echo '<br>';

        echo $request->all();

    }

    public function logout()
    {
        return view('logout');
    }
}
