<?php

use App\Http\Controllers\admin\DashboardController;
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
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index')->name('index');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.detail');

Route::get('/details/{id}', 'DetailsController@index')->name('details');
Route::post('/details/{id}', 'DetailsController@add')->name('details-product-add');


Route::post('callback', 'CheckoutController@callback')->name('callback-midtrans');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('/delete-cart/{id}', 'CartController@delete')->name('delete-cart');
    Route::post('checkout', 'CheckoutController@process')->name('checkout');    
    
    //dashboard
Route::get('dashboard', 'DashboardController@index')->name('dashboard');


//account
Route::get('/settings', 'DashboardController@settings')->name('dashboard-settings');
Route::get('/account', 'DashboardController@account')->name('dashboard-account');


//transaction
Route::get('/transaction', 'DashboardTransactionController@index')->name('dashboard-transaction');
Route::get('/transaction-detail/{id}', 'DashboardTransactionController@detail')->name('dashboard-detail');

//product
Route::get('/product', 'DashboardProductController@product')->name('dashboard-product');
Route::get('create', 'DashboardProductController@create')->name('dashboard-create');
Route::post('store', 'DashboardProductController@store')->name('dashboard-store');
Route::get('/product/{id}', 'DashboardProductController@show')->name('dashboard-product-detail');
Route::put('/product/edit/{id}', 'DashboardProductController@update')->name('dashboard-product-update');
Route::post('/product/edit/gallery', 'DashboardProductController@updateGallery')->name('dashboard-product-update-gallery');
Route::get('/product/delete/{id}', 'DashboardProductController@delete')->name('dashboard-product-delete');


});
Route::get('/success', 'CartController@success')->name('success');
Route::get('/regses', 'Auth\RegisterController@success')->name('register-success');


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin-dashboard');

    Route::get('categories', 'CategoryController@index')->name('admin-categories');
    Route::get('users', 'UserController@index')->name('admin-users');
    Route::get('create', 'CategoryController@create')->name('create-categories');
    Route::get('edit/{id})', 'CategoryController@edit')->name('edit-categories');
    Route::post('store', 'CategoryController@store')->name('store-categories');
    Route::put('update/{id}', 'CategoryController@update')->name('update-categories');
    Route::delete('destroy/{id}', 'CategoryController@destroy')->name('category-destroy');
// users
    Route::resource('user', 'UserController');
    Route::resource( 'product', 'ProductController');
    Route::resource('gallery', 'ProductGalleryController');

});
