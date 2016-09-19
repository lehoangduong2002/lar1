<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', 'LoginController@getLogin')->name('login');
Route::post('admin/login', 'LoginController@checkLogin')->name('checkLogin');


Route::get('admin/dashboard', function () {
    return view('admin.dashboard.main');
})->name('dashboard');
