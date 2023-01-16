<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;

Route::view('/', 'home.index');
Route::redirect('/home' , '/')->name('home');

Route::get('test' , [TestController::class , 'index'])->middleware('token');

Route::middleware('guest')->group(function (){

    Route::get('/register' , [RegisterController::class , 'index'])->name('register');
    Route::post('/register' , [RegisterController::class , 'store'])->name('register.store');
    
    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::post('/login' , [LoginController::class , 'store'])->name('login.store');
});


// Route::get('login/{user}/confirmation' , [LoginController::class , 'confirmation'])->name('login.confirmation');
// Route::post('login/{user}/confirm' , [LoginController::class , 'confirm'])->name('login.confirm');
 
Route::get('/blog' , [BlogController::class , 'index'])->name('blog');
Route::get('/blog/{post}' , [BlogController::class , 'show'])->name('blog.show');
Route::post('/blog/{post}/like' , [BlogController::class , 'like'])->name('blog.like');





