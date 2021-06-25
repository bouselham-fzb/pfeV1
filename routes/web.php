<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\parkagentController;
use App\Http\Controllers\ResparkController;
use App\Http\Controllers\StatvoitController;
use App\Http\Controllers\StatpassController;
use App\Http\Controllers\ResplaceController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('login', [App\Http\Controllers\LoginController::class, 'login'])->name('log');
Route::get('reservation', function () {
    return view('reservation.reservation');
});
Route::resource('parkliste',ResparkController::class);
Route::resource('voitures',ResplaceController::class);

/*Route::get('agents', function () {
    return view('Admin.parkings.agents');
});*/
/*Route::get('stationnements', function () {
    return view('Admin.agtaches.stationnements');
});*/
Route::post('admin','App\Http\Controllers\Auth\LoginController@login');
Route::get('admin','App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin.login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');
//Route::resource('parkings', ParkingController::class);

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware('auth:web')->group(function () {
    Route::resource('parkings', ParkingController::class)->middleware('is_admin');
    Route::resource('agents', parkagentController::class)->middleware('is_admin');

    Route::get('home', [HomeController::class, 'adminHome'])->name('admin.home');

});
Route::prefix('agent')->middleware('auth:web')->group(function () {
    Route::resource('places', PlaceController::class);
   Route::get('home', [HomeController::class, 'index'])->name('agent.home');
   Route::resource('newstationnements', StatvoitController::class);
   Route::get('search','App\Http\Controllers\StatvoitController@search')->name('newstationnements.search');

   Route::resource('oldstationnements', StatpassController::class);


});
