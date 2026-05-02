<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use League\Uri\Http;

// SITE
Route::get('/', [SiteController::class, 'index']);

// LOGIN
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);