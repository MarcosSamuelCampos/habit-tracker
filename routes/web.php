<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use League\Uri\Http;


Route::get('/', [SiteController::class, 'index']);