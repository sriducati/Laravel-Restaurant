<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','RestaurantController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/create','HomeController@create');
Route::get('/edit/{id}','HomeController@edit');
Route::patch('/update/{id}','HomeController@update');
Route::get('/delete/{id}','HomeController@delete');
