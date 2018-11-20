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

Route::get('/','LoginController@getLogin');



Route::get('/login','LoginController@getLogin');
Route::post('/login','LoginController@postLogin');
	// 'uses'=>'LoginController@postLogin',
	// 'as'=>'login.CreateAccount',
	// 'as'=>'login.Tablebasic',
	// 'as'=>'login.tabledata'

Route::get('/index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('/create',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);





Route::get('CreateAccount','PageController@create_account');
Route::post('CreateAccount','PageController@store_account');



Route::get('tabledata','PageController@getTabledata')->name('tabledata');

Route::get('Tablebasic','PageController@getTablebasic')->name('Tablebasic');

