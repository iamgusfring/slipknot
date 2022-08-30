<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialNetwork\FacebookController;
use App\Http\Controllers\SocialNetwork\InstagramController;
use App\Http\Controllers\SocialNetwork\TwitterController;
use App\Http\Controllers\SocialNetwork\LinkedinController;
use App\Http\Controllers\SocialNetwork\MktController;
use App\Http\Controllers\IpAddressController;

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

Route::get('/facebook', [FacebookController::class, 'index'])->name('facebook');
Route::post('/facebook', [FacebookController::class, 'store']);

Route::get('/instagram', [InstagramController::class, 'index'])->name('instagram');
Route::post('/instagram', [InstagramController::class, 'store']);

Route::get('/twitter', [TwitterController::class, 'index'])->name('twitter');
Route::post('/twitter', [TwitterController::class, 'store']);

Route::get('/linkedin', [LinkedinController::class, 'index'])->name('linkedin');
Route::post('/linkedin', [LinkedinController::class, 'store']);

Route::get('/mkt', [MktController::class, 'index'])->name('mkt');
Route::post('/mkt', [MktController::class, 'store']);

Route::get('/visitor', [IpAddressController::class, 'index'])->name('visitor');
Route::post('/visitor', [IpAddressController::class, 'store']);






Route::group(['middleware' => ['auth']], function () { 
    Route::get('/dashboardfacebook', [FacebookController::class, 'dashboardFacebook'])->name('dashboardFacebook');
    Route::get('/dashboardinstagram', [InstagramController::class, 'dashboardInstagram'])->name('dashboardInstagram');
    Route::get('/dashboardtwitter', [TwitterController::class, 'dashboardTwitter'])->name('dashboardtwitter');
    Route::get('/dashboardlinkedin', [LinkedinController::class, 'dashboardLinkedin'])->name('dashboardlinkedin');
    Route::get('/dashboardmkt', [MktController::class, 'dashboardMkt'])->name('dashboardmkt');
    Route::get('/dashboardvisitor', [IpAddressController::class, 'dashboardVisitor'])->name('dashboardvisitor');
});