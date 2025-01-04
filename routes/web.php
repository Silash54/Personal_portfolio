<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'regitser'])->name('register');