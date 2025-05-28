<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    echo '<h1>About Us</h1>';
    echo '<p>This is the about page of our application.</p>';
});

Route::get('/main/{value}', [MainController::class, 'index']);
