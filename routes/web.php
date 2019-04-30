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

Route::get('/','ListingController@index');

Auth::routes();

Route::resource('listing','ListingController');
//Route::post('listing/store','ListingController@store')->name('ListingController.store');
//Route::put('listing/update/{id}','ListingController@update')->name('ListingController.update');
//Route::delete('listing/destroy/{id}','ListingController@destroy')->name('ListingController@destroy');

Route::get('/dashboard', 'DashboardController@index');
