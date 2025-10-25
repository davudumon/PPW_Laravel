<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
    return view('login');
});

Route::get('/', [ProductController::class, 'index']) -> name('produk');

Route::get('/users', [UserController::class, 'index']);

Route::get('/books', [BukuController::class, 'index']);