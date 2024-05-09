<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/category', [CategoryController::class, 'index'])->name('category');
Route::get('/home/category/add', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
Route::get('/role-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/role-edit/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/home/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::get('/blogpost', [BlogPostController::class, 'index'])->name('blogpost');
Route::get('/about', [AboutusController::class, 'index'])->name('aboutu');
Route::get('/blogpost/add', [BlogPostController::class, 'add'])->name('blogpost.add');
Route::post('/blogpost/add', [BlogPostController::class, 'store'])->name('blogpost.store');



// Route::prefix('blogpost')->group(function () {
//     Route::get('/home/post', [BlogPostController::class, 'index'])->name('blogpost');
//     // Other blog post routes...
// });
