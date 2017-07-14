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
})->name('index.view');

Route::get('login', function() {
    return view('auth/login');
})->name('login.view');

Route::get('personal', function() {
    return view('users/personal');
})->name('personal.view');

Route::resource('user', 'UsersController');

Route::post('login', 'UsersController@auth')->name('login.action');
Route::get('logout', 'UsersController@logout')->name('logout.action');