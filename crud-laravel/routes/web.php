<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;



Route::get('/', function () {
    return view('home');
});

Route::resource('/alumnos',AlumnoController::class);
Route::get('/register',[RegisterController::class,'create'])->name('register.index');


Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/login',[SessionsController::class,'create'])->name('login.index');

Route::post('/login',[SessionsController::class,'store'])->name('login.store');

Route::post('/logout',[SessionsController::class,'store'])->name('login.store');