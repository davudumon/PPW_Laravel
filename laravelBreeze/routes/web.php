<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendEmailController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hello', function(){
    return "Hallo Dunia";
});

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/admin', function(){
    return "Halaman Admin";
})->middleware(['auth', 'isAdmin']);

Route::get('/admin/jobs', function(){
    return "Halaman Ini Hanya Bisa Diakses oleh Admin!";
})->middleware('auth', 'isAdmin');

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

require __DIR__.'/auth.php';
