<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// HomeController
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');

// AdminHomeController
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

// AuthController
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');