<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\LikeViewController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('admin/profile',[AuthController::class,'profile'])->name('profile');
Route::post('admin/profile',[AuthController::class,'profile_update'])->name('profile_update');
Route::post('/register',[AuthController::class,'register_post'])->name('register_post');
Route::get('logout',[AuthController::class,'logOut'])->name('logout');
Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('admin/project',ProjectController::class)->names('project');
Route::post('project-details/{id}',[LikeViewController::class,'addLike'])->name('project_detail');
Route::resource('admin/skill',SkillController::class)->names('skill');
Route::post('frontend/contact',[ContactController::class,'contact'])->name('contact');
Route::get('admin/message',[DashboardController::class,'message'])->name('message');
Route::resource('admin/education',EducationController::class)->names('education');
