<?php

use App\Http\Controllers\DataController;
use App\Models\profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/data', [DataController::class, 'index']);

Route::get('/profile', function () {
    return view('profile', [
        "profiles" => profile::all()
    ]);
});

// Route::get('/profile', function () {
//     return view('profile');
// });
