<?php
use App\Http\Controllers\ControllerAut;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [ControllerAut::class, 'showLogin'])->name('login');

Route::post('/login', [ControllerAut::class, 'login']);

Route::middleware(['auth'])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
