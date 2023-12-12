<?php

use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', HomeController::class)->name('home');
