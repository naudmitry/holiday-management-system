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
})->name('home.view');

Route::get('login', function() {
    return view('auth/login');
})->name('login.view');

Route::get('personal', function() {
    return view('users/personal');
})->name('personal.view');

Route::resource('users', 'UsersController', ['middleware' => 'role:employee']);

Route::get('users/{user}/delete', 'UsersController@delete', function(\App\Models\User $user) {
    return view('users/delete');
})->name('users.delete')->middleware('role:employee');

Route::post('login', 'AuthorizationController@login')->name('login.action');
Route::get('logout', 'AuthorizationController@logout')->name('logout.action');

Route::get('dashboard', function() {
    return view('dashboard/head');
})->name('dashboard.view');