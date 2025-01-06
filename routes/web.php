<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'register_post'])->name('register_post');
Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('admin/project',ProjectController::class)->names('project');
Route::resource('admin/skill',SkillController::class)->names('skill');