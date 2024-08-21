<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResgisterController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

Route::prefix('/')->middleware('auth')->group(function () { 
    Route::get('/',[PostController::class, 'index'])->name('pages.index');
    Route::get('/search', [PostController::class, 'index'])->name('pages.search');

    Route::get('/myinsights', [PostController::class, 'insights'])->name('pages.myInsights');

    Route::get('/post/{id}', [PostController::class, 'post'])->name('pages.post');

    Route::get('/create',[PostController::class, 'add'])->name('pages.create');
    Route::post('/create',[PostController::class, 'addStore'])->name('pages.addStore');

    Route::get('/update/{id}',[PostController::class, 'update'])->name('pages.update');
    Route::patch('/update/{id}',[PostController::class, 'updateStore'])->name('pages.updateStore');

    Route::delete('/delete/{id}',[PostController::class, 'deleteStore'])->name('pages.deleteStore');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'userLogin'])->name('login.user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [ResgisterController::class, 'register'])->name('register');
Route::post('/register', [ResgisterController::class, 'registerStore'])->name('registerStore');