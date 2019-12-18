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
Route::get('/admin/users/store', 'UsersController@store')->name('admin.users.store');
Route::get('/admin/users/edit/{id}', 'UsersController@edit')->name('admin.users.edit');
Route::get('/admin/users/destroy/{id}', 'UsersController@destroy')->name('admin.users.destroy');
Route::get('/admin/users/profile/{id}', 'UsersController@show')->name('admin.users.show');

Route::get('/admin/roles', 'RolesController@index')->name('admin.roles');
Route::get('/admin/roles/new', 'RolesController@create')->name('admin.roles.new');
Route::get('/admin/roles/edit/{id}', 'RolesController@edit')->name('admin.roles.edit');
Route::get('/admin/roles/destroy/{id}', 'RolesController@destroy')->name('admin.roles.destroy');
Route::get('/admin/roles/profile/{id}', 'RolesController@show')->name('admin.roles.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
