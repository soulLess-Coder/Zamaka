<?php
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComparisionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/profile', [UserProfileController::class, 'index'])->name('userprofile');


Route::get('/tenant', function () {
    return view('tenant.index');
});

/* ***Mahad's Routes*** */

Route::get('/admin', function () {
    return view('admin.add-listing');
});

Route::get('/payment', function () {
    return view('tenant.payment');
});

Route::get('/listings', [ListingController::class, 'index'])->name('listings');

Route::get('/details', function () {
    return view('tenant.listing-details');
});

Route::get('/adminDashboard', function () {
    return view('admin.admin-dashboard');
});

Route::get('/', function () {
    return view('index');
});















/* *** Usman's Routes *** */

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/compare', [ComparisionController::class, 'index'])->name('compare');
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaint');





















/* ***Salman's Routes*** */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
