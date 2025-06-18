<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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
        $request->validate(
        // Rules    
        [
            'text-username' => 'required|email',
            'text-password' => 'required|min:6|max:16'
        ],
        // Parametros (msg de erro)
        [
            'text-username.required' => 'O email é obrigatório.',
            'text-username.email' => 'O username deve ser um email válido.',
            'text-password.required' => 'O password é obrigatório',
            'text-password.min' => 'O password deve conter no mínimo :min caracteres.',
            'text-password.max' => 'O password deve conter no máximo :max caracteres.'
        ]

        );

        // Get user input

        $username = $request->input('text-username');
        $password = $request->input('text-password');

        // Test db connection
        try {
            DB::connection()->getPdo();
            echo 'Connection is OK!';
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        echo 'Finished';
    }

    public function logout()
    {
        return view('logout');
    }
}
