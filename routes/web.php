<?php

use App\Http\Controllers;
use App\Models;

Route::get('/', function () {
    return view('index');
})->name('home.view');

Route::get('users/personal', 'UsersController@personal')->name('personal.view');
Route::get('users/{user}/delete', 'UsersController@delete')->name('users.delete')->middleware('role:head');
Route::get('users/add', 'UsersController@add')->name('users.add')->middleware('role:head');
Route::resource('users', 'UsersController', ['middleware' => 'role:head']);

Route::post('login', 'AuthorizationController@login')->name('login.action');
Route::get('login', 'AuthorizationController@auth')->name('login.view');
Route::get('logout', 'AuthorizationController@logout')->name('logout.action');