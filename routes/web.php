<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('users/list', 'UserController@index')->name('users.index');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function () {
        return redirect()->route('home');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('users/list', 'UserController@index')->name('users.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');
    Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('user/update/{id}', 'UserController@update')->name('user.update');



});
