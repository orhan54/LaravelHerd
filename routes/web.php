<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUsercontroller;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisterUsercontroller::class, 'create']);
Route::post('/register', [RegisterUsercontroller::class, 'store']);

route::get('/login', [SessionController::class, 'create']);
route::post('/login', [SessionController::class, 'store']);
route::post('/logout', [SessionController::class, 'destroy']);


