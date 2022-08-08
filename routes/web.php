<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialNetwork\FacebookController;
use App\Http\Controllers\SocialNetwork\InstagramController;

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
Route::get('/facebook', [FacebookController::class, 'index'])->name('facebook');
Route::post('/facebook', [FacebookController::class, 'store']);

Route::get('/instagram', [InstagramController::class, 'index'])->name('instagram');
Route::post('/instagram', [InstagramController::class, 'store']);



Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/dashboardfacebook', [FacebookController::class, 'dashboardFacebook'])->name('dashboardFacebook');
Route::get('/dashboardinstagram', [InstagramController::class, 'dashboardInstagram'])->name('dashboardInstagram');
