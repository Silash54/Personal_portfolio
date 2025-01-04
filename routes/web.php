<?php

use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');