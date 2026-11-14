<?php

use Illuminate\Support\Facades\Route;
use Core\Auth\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'login'])->name('login');
