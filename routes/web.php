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
    return view('index');
});

Route::get('login', function() {
    return view('auth/login');
});

Route::get('personal', function() {
    return view('users/personal');
});

Route::resource('user', 'UsersController');

Route::get('auth', 'UsersController@auth');