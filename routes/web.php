<?php

use App\Http\Controllers;
use App\Models;

Route::get('/', 'SiteController@index')->name('home.view');

Route::get('users/personal', 'UserController@personal')->name('personal.view');
Route::get('users/{user}/delete', 'UserController@delete')->name('users.delete')->middleware('role:head');
Route::get('users/add', 'UserController@add')->name('users.add')->middleware('role:head');
Route::resource('users', 'UserController', ['middleware' => 'role:head']);

Route::resource('settings', 'SettingController', ['middleware' => 'role:head']);

Route::resource('positions', 'PositionController', ['middleware' => 'role:head']);

Route::post('login', 'AuthorizationController@login')->name('login.action');
Route::get('login', 'AuthorizationController@auth')->name('login.view');
Route::get('logout', 'AuthorizationController@logout')->name('logout.action');