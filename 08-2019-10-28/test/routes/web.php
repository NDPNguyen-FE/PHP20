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
    return view('welcome');
   
});

Route::get('nguyen', function() {
    return 'Hello World';
});

Route::get('php', function(){
    return view('8-2019-03-15/index');
});