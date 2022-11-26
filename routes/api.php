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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/safe/status', function (Request $request){

	return "1";
});


Route::middleware('auth:api')->post('/alarms', 'App\Http\Controllers\AlarmController@jstore');
Route::middleware('auth:api')->get('/alarms', 'App\Http\Controllers\AlarmController@jindex');
Route::middleware('auth:api')->get('/alarmscount', 'App\Http\Controllers\AlarmController@jcount');
