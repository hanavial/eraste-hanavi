<?php

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

//Customer
Route::get('/', 'ProductController@home')->name('product.home');
Route::get('/order/{id}', 'OrdersController@create')->name('orders.create');
Route::post('/order/store', 'OrdersController@store')->name('orders.store');
//Route::get('/order/show', 'OrdersController@show')->name('orders.show');

Auth::routes();

//Admin
Route::group(['prefix' => 'backoff', 'middleware' => ['web','auth'],], function () {
    Route::get('/', 'BackofficeController@index')->name('office.index');

    //Product
    Route::get('/product', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::put('/product/update/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
    //Order

    Route::get('/order', 'OrdersController@index')->name('orders.index');
    Route::get('/order/edit/{id}', 'OrdersController@edit')->name('orders.edit');
    Route::put('/order/update/{id}', 'OrdersController@update')->name('orders.update');
    Route::delete('/order/delete/{id}', 'OrdersController@delete')->name('orders.delete');
    //User

    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user/store', 'UserController@store')->name('user.store');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}', 'UserController@update')->name('user.update');
    Route::delete('/user/delete/{id}', 'UserController@delete')->name('user.delete');
});


// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/home', 'HomeController@index')->name('home');
