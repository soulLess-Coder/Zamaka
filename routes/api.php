<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Address;
use App\Http\Controllers\ListingController;
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

Route::get('/listings', [ListingController::class, 'index']);
Route::post('/listings', [ListingController::class, 'store']);
//    Address::create([
//
//    ]);
//
//    return Property::create([
//        'description' => "Great Property. Good Location",
//        'landmarks' => "Faisal Mosque",
//        'property_size' => "2 sq km",
//        'image' => "Image path",
//        'video' => "video path",
//        'lease_price' => 200.32965,
//        'build_year' => 2011
//    ]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





