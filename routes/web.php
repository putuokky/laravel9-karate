<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('', 'dashboard-general');

// Dashboard
Route::controller(DashboardController::class)->group(function () {
    Route::get('dashboard-general', 'dashboardGeneral');
    Route::get('dashboard-ecommerce', 'dashboardEcommerce');
});

// Login
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login');
    Route::get('login2', 'login2');
});

// User
Route::resource('user', UserController::class);

// Role
Route::resource('role', RoleController::class);
