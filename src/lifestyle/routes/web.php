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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', 'UsersController@index');

Route::get('/mypage/edit', 'UsersController@edit');
Route::post('/mypage/edit', 'UsersController@update');

Route::get('/deactive', 'Auth\DeactiveController@showDeactiveForm')->name('deactive.form');
Route::post('/deactive', 'Auth\DeactiveController@deactive')->name('deactive');

Route::resource('/post', 'PostController');
