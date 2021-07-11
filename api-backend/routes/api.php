<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\CustomerController;

Route::resource('customers', CustomerController::class);

use App\Http\Controllers\ChartsController;

Route::resource('charts', ChartsController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});