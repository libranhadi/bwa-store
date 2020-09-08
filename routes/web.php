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


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', 'HomeController@index')->name('index');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/details/id', 'DetailsController@index')->name('details');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');
Route::get('/regses', 'Auth\RegisterController@success')->name('register-success');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/mydashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/product', 'DashboardController@product')->name('dashboard-product');
    Route::get('/settings', 'DashboardController@settings')->name('dashboard-settings');
    Route::get('/account', 'DashboardController@account')->name('dashboard-account');
    Route::get('/transaction', 'DashboardController@transaction')->name('dashboard-transaction');
    Route::get('/transaction/id', 'DashboardController@detail')->name('dashboard-detail');
});
