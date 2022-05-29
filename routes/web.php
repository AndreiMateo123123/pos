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



Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::get('/product', 'App\Http\Controllers\ProductController@product')->name('product')->middleware('auth');
Route::get('/salesreport', 'App\Http\Controllers\HomeController@salesreport')->name('salesreport')->middleware('auth');
Route::get('/payment', 'App\Http\Controllers\HomeController@payment')->name('payment')->middleware('auth');
Route::get('/cancelorder', 'App\Http\Controllers\HomeController@cancelorder')->name('cancelorder')->middleware('auth');
Route::get('/order', 'App\Http\Controllers\HomeController@order')->name('order')->middleware('auth');
//Route::get('/suppliers', 'App\Http\Controllers\HomeController@suppliers')->name('suppliers')->middleware('auth');
//Route::get('/users', 'App\Http\Controllers\HomeController@users')->name('users')->middleware('auth');
//Route::get('/companies', 'App\Http\Controllers\HomeController@companies')->name('companies')->middleware('auth');
//Route::get('/transaction', 'App\Http\Controllers\HomeController@transaction')->name('transaction')->middleware('auth');	
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);

	

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::view('/products','products');
route::post('/save',[ProductController::class,'save'])->name('save.product');



// add category
Route::get('/add-category/{name}', 'App\Http\Controllers\ProductController@add_category')->name('category.add')->middleware('auth');
Route::post('/add-product', 'App\Http\Controllers\ProductController@add_product')->name('product.add')->middleware('auth');


