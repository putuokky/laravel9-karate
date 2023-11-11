<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

// Layout
// Route::get('/layout-default-layout', function () {
//     return view('pages.layout-default-layout', ['type_menu' => 'layout']);
// });

// Blank Page
// Route::get('/blank-page', function () {
//     return view('pages.blank-page', ['type_menu' => '']);
// });

// forms
// Route::get('/forms-advanced-form', function () {
//     return view('pages.forms-advanced-form', ['type_menu' => 'forms']);
// });
// Route::get('/forms-editor', function () {
//     return view('pages.forms-editor', ['type_menu' => 'forms']);
// });
// Route::get('/forms-validation', function () {
//     return view('pages.forms-validation', ['type_menu' => 'forms']);
// });

// auth
// Route::get('/auth-forgot-password', function () {
//     return view('pages.auth.auth-forgot-password', ['type_menu' => 'auth']);
// });
// Route::get('/auth-login', function () {
//     return view('pages.auth.auth-login', ['type_menu' => 'auth']);
// });
// Route::get('/auth-login2', function () {
//     return view('pages.auth.auth-login2', ['type_menu' => 'auth']);
// });
// Route::get('/auth-register', function () {
//     return view('pages.auth.auth-register', ['type_menu' => 'auth']);
// });
// Route::get('/auth-reset-password', function () {
//     return view('pages.auth.auth-reset-password', ['type_menu' => 'auth']);
// });
