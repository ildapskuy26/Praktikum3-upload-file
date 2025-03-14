<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Homepage route
Route::get('/', function () {
    return view('welcome');
});

// Profile form route
Route::view('/profile', 'profile');

// Submit profile form route
Route::post('/submit-profile', [ProfileController::class, 'submit']);
