<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sd', function () {
    return view('layouts.Dashboard.mainlayout');
})->middleware('isadmin');

Route::get('/create-user', function () {
    $user = new User();
    $user->name = 'Example Name';
    $user->email = 'example@example.com';
    $user->password = Hash::make('password'); // It's important to hash passwords
    $user->isadmin = true;
    $user->save();

    return "User created successfully!";
});


Route::get('/o', [\App\Http\Controllers\Website\HomeController::class, 'index'])->name('Home');



Route::middleware(['set-locale'])->group(function () {
    Route::get('/lang', [\App\Http\Controllers\Website\HomeController::class, 'test'])->name('Home');
    });

Auth::routes();


