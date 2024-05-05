<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/category',[CategoryController::class, 'index'])->name('category');
Route::get('/home/category/add',[CategoryController::class, 'create'])->name('category.create');
Route::post('/category/add',[CategoryController::class, 'store'])->name('category.store');
