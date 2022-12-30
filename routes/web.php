<?php

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

Route::get('/', function () {
	//return view('welcome');
	return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => 'auth'], function () {

Route::get('orders', 'App\Http\Controllers\OrderController@index')->name('orders');
Route::post('orders/create', 'App\Http\Controllers\OrderController@store');
Route::get('orders/create', 'App\Http\Controllers\OrderController@create');
Route::post('/order/{id}/update', 'App\Http\Controllers\OrderController@update');
Route::get('/order/{id}/edit', 'App\Http\Controllers\OrderController@edit');


Route::get('cashbins', 'App\Http\Controllers\CashBinController@index')->name('cashbins');
Route::get('cashbins/request', 'App\Http\Controllers\CashBinController@requestcash');

Route::get('acam', 'App\Http\Controllers\AccessCamController@index')->name('acam');

Route::get('alarms', 'App\Http\Controllers\AlarmController@index')->name('alarms');

});

require __DIR__.'/auth.php';
