<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/en', [HomeController::class, 'indexEn']);
Route::get('/aboutUs/{lang?}', [HomeController::class, 'aboutUs']);
Route::get('/services/{lang?}', [HomeController::class, 'services']);
Route::post('/services/{lang?}', [HomeController::class, 'postOrderService']);
Route::get('/email/{lang?}', [HomeController::class, 'email']);
Route::post('/email/{lang?}', [HomeController::class, 'emailConfirmed']);
Route::get('/comments/{lang?}', [HomeController::class, 'comments']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
