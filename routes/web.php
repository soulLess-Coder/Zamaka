<?php
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComparisionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/profile', [UserProfileController::class, 'index'])->name('userprofile');
Route::get('/reset', [resetController::class, 'index'])->name('resetpass');
Route::get('/details', [PropertyDetailsController::class, 'index'])->name('details');
Route::get('/tenant', function () {
    return view('tenant.index');
});
Route::get('/tenant/request', function () {
    return view('tenant.housedetail');
})->name('housedetails');

Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);

Route::get('/tenant/housedetails', function () {
    return view('tenant.maintenance_request');
});

//Admin Routes
Route::get('/admin/userlist', function () { //C
    return view('admin.userlist');
});

Route::get('/admin/assignTasks', function () {
    return view('admin.assigntask');
});

Route::get('/admin/assignrole', function () {
    return view('admin.assign-roles');
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

Route::get('/admin/agentrequest', function () {
    return view('admin.agentrequest');
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

Route::get('/listings', function (){
    return view('tenant.listings');
})->name('listings');

Route::get('/admin', function () {
    return view('admin.admin-dashboard');
})->name('admin');

Route::get('/tenant/details', function () {
    return view('tenant.listing-details');
});

Route::get('/career', function () {
    return view('admin.addagent');
});

Route::get('/admin/newtenant', function () {
    return view('admin.addnewtenant');
});

Route::get('/admin', function () {
    return view('admin.admin-dashboard');
})->name('admin');

Route::get('/agent/visitdetails', function () {
    return view('agent.visitdetails');
});

Route::get('/tenant', function () {
    return view('tenant.index');
});


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/compare', [ComparisionController::class, 'index'])->name('compare');

Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaint');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Owner Routes
Route::get('/owner', function () {
    return view('owner.owner-dashboard');
})->name('owner');

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
})->name('agent');

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

Route::get('/admin/approval', function () {
    return view('admin.approval');
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

Route::get('/finance/balancesheet/edit', function () {
    return view('finance.edit');
});


Route::get('/finance/invoice', function () {
    return view('finance.invoice');
});

Route::get('/finance/newinvoice', function () {
    return view('finance.newinvoice');
});

Route::get('/finance/transaction', function () {
    return view('finance.transaction');
});

Route::get('/finance/newtransaction', function () {
    return view('finance.newtransaction');
});
Route::get('/wishlist', function () {
    return view('tenant.wishlist');
})->name('wishlist');
