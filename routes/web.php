<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResgisterController;
use App\Http\Controllers\StoriesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', [PostController::class, 'index'])->name('pages.index');

Route::prefix('/')->middleware('auth')->group(function () {
    // post
    Route::get('/search', [PostController::class, 'index'])->name('pages.search');
    Route::get('/post/{id}', [PostController::class, 'post'])->name('pages.post');
    Route::get('/create', [PostController::class, 'add'])->name('pages.create');
    Route::post('/create', [PostController::class, 'addStore'])->name('pages.addStore');
    Route::get('/update/{id}', [PostController::class, 'update'])->name('pages.update');
    Route::patch('/update/{id}', [PostController::class, 'updateStore'])->name('pages.updateStore');
    Route::delete('/delete/{id}', [PostController::class, 'deleteStore'])->name('pages.deleteStore');

    //stories
    Route::get('/stories', [StoriesController::class, 'index'])->name('pages.stories');
    
    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('pages.profile');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'userLogin'])->name('login.user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [ResgisterController::class, 'register'])->name('register');
Route::post('/register', [ResgisterController::class, 'registerStore'])->name('registerStore');
