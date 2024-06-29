<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Category routes
Route::get('/home/category', [CategoryController::class, 'index'])->name('category');
Route::get('/home/category/add', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
Route::get('/role-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/role-edit/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/home/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Blog post routes
Route::get('/blogpost', [BlogPostController::class, 'index'])->name('blogpost.index');
Route::get('/about', [AboutusController::class, 'index'])->name('about');
Route::get('/blogpost/add', [BlogPostController::class, 'add'])->name('blogpost.add');
Route::post('/blogpost/add', [BlogPostController::class, 'store'])->name('blogpost.store');
Route::delete('/home/blogpost/{id}', [BlogPostController::class, 'destroy'])->name('blogpost.destroy');
Route::get('/blogpost/edit/{id}', [BlogPostController::class, 'edit'])->name('blogpost.edit');



// Route to read more about a blog post
Route::get('blogpost/{id}/readMore', [BlogPostController::class, 'readMore'])->name('blogpost.readMore');

// Route to show all blog posts (public and private)
Route::get('/blogs', [BlogPostController::class, 'showAll'])->name('blogs.showAll');

// Comment routes
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');

// Route to toggle visibility of blog post
Route::post('/blogpost/toggleVisibility', [BlogPostController::class, 'toggleVisibility'])->name('blogpost.toggleVisibility');

//Route for iamge
Route::post('/upload', [BlogPostController::class, 'upload']);