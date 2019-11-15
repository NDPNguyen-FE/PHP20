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

route::get('/users','UsersController@index')->name('users.index');
route::get('/users/create', 'UsersConTroller@create');
route::get('/users/{id}','UsersController@show');
Route::post('/users','UsersController@store');
route::delete('/users/{id}','UsersConTroller@destroy');
route::get('/users/{id}/edit','UsersConTroller@edit');
route::put('/user/{id}','UsersController@update')->name('users.upsate');