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
Route::get('/admin/users', 'UsersController@index');
Route::get('/admin/users/new', 'UsersController@create');
Route::get('/admin/users/edit/{id}', 'UsersController@edit')->name('admin.users.edit');
Route::get('/admin/users/destroy', 'UsersController@destroy')->name('admin.users.destroy');
Route::get('/admin/users/profile', 'UsersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
