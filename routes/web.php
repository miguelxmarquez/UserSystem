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
Route::get('/admin/users', 'UsersController@index')->name('admin.users');
Route::get('/admin/users/new', 'UsersController@create')->name('admin.users.new');
Route::get('/admin/users/edit/{id}', 'UsersController@edit')->name('admin.users.edit');
Route::get('/admin/users/destroy/{id}', 'UsersController@destroy')->name('admin.users.destroy');
Route::get('/admin/users/profile/{id}', 'UsersController@show')->name('admin.users.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
