<?php

use Illuminate\Support\Facades\Auth;
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
    return view('guest.welcome');
});

Auth::routes();

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    Route::resource('plates', 'PlateController');
    Route::get('finances', 'FinanceController@index')->name('finances.index');
    Route::get('orders', 'OrderController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrderController@show')->name('orders.show');

    Route::get('/home', 'HomeController@index')->name('home');
});
