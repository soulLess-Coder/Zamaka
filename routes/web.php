<?php
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComparisionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\resetController;
use App\Http\Controllers\PropertyDetailsController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/profile', [UserProfileController::class, 'index'])->name('userprofile');
Route::get('/reset', [resetController::class, 'index'])->name('resetpass');
Route::get('/details', [PropertyDetailsController::class, 'index'])->name('details');
Route::get('/tenant', function () {
    return view('tenant.index');
});
Route::get('/tenant/request', function () {
    return view('tenant.maintenance_request');
});
//Admin Routes
Route::get('/admin/userlist', function () {
    return view('admin.userlist');
});

Route::get('/admin/assignTasks', function () {
    return view('admin.assigntask');
});


Route::get('/admin/livelistings', function () {
    return view('admin.livelistings');
});

Route::get('/admin/comparePropertyCondition', function () {
    return view('admin.conditionComparision');
});

Route::get('/admin/chat', function () {
    return view('admin.chat');
});


Route::get('/admin/addListing', function () {
    return view('admin.add-listing');
});

Route::get('/admin/banned', function () {
    return view('admin.ban-list');
});

Route::get('/admin/addTenant', function () {
    return view('admin.add-tenant-details');
});

Route::get('/payment', function () {
    return view('tenant.payment');
});

Route::get('/listings', [ListingController::class, 'index'])->name('listings');


Route::get('/admin', function () {
    return view('admin.admin-dashboard');
});

Route::get('/admin/visitdetails', function () {
    return view('admin.visitdetails');
});

Route::get('/tenant', function () {
    return view('tenant.index');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/compare', [ComparisionController::class, 'index'])->name('compare');

Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaint');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Owner Routes
Route::get('/owner', function () {
    return view('owner.owner-dashboard');
});

Route::get('/owner/Logs', function () {
    return view('owner.maintenance-records');
});

Route::get('/owner/occupantDetails', function () {
    return view('owner.tenant-details');
});

Route::get('/owner/Ledger', function () {
    return view('owner.tenant-details');
});

//Agent Routes
Route::get('/agent', function () {
    return view('agent.agent-dashboard');
});

Route::get('/agent/appointments', function () {
    return view('agent.view-appointment');
});

Route::get('/agent/pastVisits', function () {
    return view('agent.past-visits');
});

Route::get('/agent/report', function () {
    return view('agent.visit-report');
});


Route::get('/finance/balancesheet', function () {
    return view('finance.balancesheet');
});

Route::get('/finance/chartofAccounts', function () {
    return view('finance.chartofAccounts');
});

Route::get('/finance/trailofBalance', function () {
    return view('finance.trailofBalance');
});

Route::get('/finance/profitandloss', function () {
    return view('finance.profitandloss');
});
