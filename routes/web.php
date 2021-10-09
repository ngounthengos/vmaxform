<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreefireController;

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
Route::post("squad", [FreefireController::class, 'addData']);
Route::get("application", [FreefireController::class, 'showData']);
Route::view("success", "success");
Route::view("team", "freefire/squad");