<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function index()
    {
        // load user's notes
         $id = session('user.id');
         $user = User::find($id)->toArray();
         $notes = User::find($id)->notes()->get()->toArray();

         echo '<pre>';
         print_r($user);
         print_r($notes);

         die();

        //show home view
        return view('home');
    }

    public function newNote()
    {
        echo "I'm creating a new note!";
    }
}
