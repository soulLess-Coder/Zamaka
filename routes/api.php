<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Address;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MaintenanceReportController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'auth'
], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);

//TODO: Protect this with later with Auth
Route::get('/listings', [ListingController::class, 'index'])->name('listings');
Route::middleware('auth')->post('/listings', [ListingController::class, 'store']);

Route::middleware('auth')->post('/MaintenanceRequest', [MaintenanceReportController::class, 'store']);

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

