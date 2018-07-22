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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/{user}/show', 'UsersController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::post('/users/{user}/update', 'UsersController@update')->name('users.update');

Route::get('/users/{user}/vehicles/create','UserVehiclesController@create')->name('vehicles.create');
Route::post('/users/{user}/vehicles','UserVehiclesController@store')->name('vehicles.store');

Route::get('/users/{user}/vehicles/{vehicle}/edit','UserVehiclesController@edit')->name('vehicles.edit');
Route::post('/users/{user}/vehicles/{vehicle}/update','UserVehiclesController@update')->name('vehicles.update');
Route::get('/users/{user}/vehicles/{vehicle}/show','UserVehiclesController@show')->name('vehicles.show');

Route::get('/paymentTypes/create','PaymentTypesController@create')->name('types.create');
Route::get('/paymentTypes','PaymentTypesController@index')->name('types.index');
Route::post('/paymentTypes','PaymentTypesController@store')->name('types.store');
Route::get('/paymentTypes/{paymentType}/edit','PaymentTypesController@edit')->name('types.edit');
Route::post('/paymentTypes/{paymentType}/update','PaymentTypesController@update')->name('types.update');
//premissions
Route::get('/permissions/create','PermissionsController@create')->name('permissions.create');
Route::get('/permissions','PermissionsController@index')->name('permissions.index');
Route::get('/permissions/{permission}/edit','PermissionsController@edit')->name('permissions.edit');
Route::get('/permissions','PermissionsController@index')->name('permissions.index');
Route::post('/permissions/{permission}/update','PermissionsController@update')->name('permissions.update');
Route::post('/permissions','PermissionsController@store')->name('permissions.store');
Route::post('/permissions/{permission}/destroy','PermissionsController@destroy')->name('permissions.destroy');


//users


