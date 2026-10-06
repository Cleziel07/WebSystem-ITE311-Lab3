<?php

// CLEZIEL T. BARUEL

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Lab 3 - Home routes
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

// Existing Student Directory routes
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])
    ->name('students.create');

Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store');

// Lab 4 - Authentication routes
Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'storeRegister']);

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout']);