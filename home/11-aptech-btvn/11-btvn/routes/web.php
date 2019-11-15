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
route::get('/index','UsersController@index')->name('users.index');
route::get('/index/{id}','UsersController@show');
route::get('/create','UsersController@create');
route::post('/index','UsersController@store');
route::get('/edit/{id}','UsersController@edit');
route::put('/index/{id}','UsersController@update');
route::delete('/index/{id}','UsersController@destroy');