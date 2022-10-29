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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('orders', 'App\Http\Controllers\OrderController@index')->name('orders');
Route::post('orders/create', 'App\Http\Controllers\OrderController@store');
Route::get('orders/create', 'App\Http\Controllers\OrderController@create');


Route::get('cashbins', 'App\Http\Controllers\CashBinController@index')->name('cashbins');

require __DIR__.'/auth.php';
