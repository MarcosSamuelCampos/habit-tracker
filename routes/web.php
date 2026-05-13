<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use League\Uri\Http;

// SITE
Route::get('/', [SiteController::class, 'index']) ->name('site.index');

// LOGIN
Route::get('/login',[LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('/cadastro',[RegisterController::class, 'registro'])->name('site.registro');
Route::post('/cadastro',[RegisterController::class, 'store'])->name('auth.registro');

//AUTH
Route::middleware('auth')->group(function(){
    //DASHBOARD
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout',[LoginController::class, 'logout'])->name('auth.logout');
    });

