<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreefireController;
use App\Http\Controllers\soloFreeFireController;
use App\Http\Controllers\FacebookController;

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
    return view('freefire/index');
});

Route::view("squad", "freefire/squad");
Route::post("squad", [FreefireController::class, 'addData']);
Route::get("application", [FreefireController::class, 'showData']);


Route::view("solo", "freefire/solo");
Route::post("solo", [soloFreeFireController::class, 'addData']);

Route::view("terms", "freefire/terms");

// Facebook Login URL
// Route::prefix('facebook')->name('facebook.')->group( function(){
//     Route::get('auth',[FacebookController::class, 'loginUsingFacebook'])->name('login');
//     Route::get('callback', [FacebookController::class, 'callbackFromFacebook'])->name('callback');
// });
