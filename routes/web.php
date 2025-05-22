<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/',  [HomeController::class,'index'] )->name('home');
Route::get('/about',  [HomeController::class,'about'] )->name('about');

Route::get('/review/add',  [ReviewController::class,'create'] )->name('add.review');
Route::post('/review/store',  [ReviewController::class,'store'] )->name('store.review');


Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class)->names([
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]);
});
