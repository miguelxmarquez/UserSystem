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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::group(['middleware' => 'admin'], function(){
    Route::resource('users','UsersController');

    Route::get('users/{id}/destroy/',[
            'uses' => 'UsersController@destroy',
            'as'   => 'admin.users.destroy'
        ]);
    });
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::group(['middleware' => 'admin'], function(){
    Route::resource('roles','RolesController');

    Route::get('roles/{id}/destroy/',[
            'uses' => 'RolesController@destroy',
            'as'   => 'admin.roles.destroy'
        ]);
    });

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
