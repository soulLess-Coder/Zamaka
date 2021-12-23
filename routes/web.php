<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/tenant', [UserProfileController::class, 'index'])->name('userprofile');

Route::get('/auth', function () {
    return view('register.index');
});

Route::get('/tenant', function () {
    return view('tenant.index');
});

/* ***Mahad's Routes*** */

Route::get('/admin', function () {
    return view('admin.add-listing');
});




















/* ***Usman's Routes*** */

Route::get('/login', [LoginController::class, 'index'])->name('login');
























/* ***Salman's Routes*** */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/register', [RegisterController::class, 'store']);
