<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;

Route::get('/',  [HomeController::class,'index'] )->name('home');
Route::get('/about',  [HomeController::class,'about'] )->name('about');

Route::get('/review/add',  [ReviewController::class,'create'] )->name('add.review');
Route::post('/review/store',  [ReviewController::class,'store'] )->name('store.review');
