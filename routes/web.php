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
});



Route::get('/login','LoginController@getLogin');
Route::post('/login','LoginController@postLogin');
Route::get('','HomeController@getIndex');

Route::get('/index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('tabledata','PageController@getTabledata')->name('tabledata');


/*Route::get('login','PageController@getLogin');
Route::post('login','PageController@postLogin');*/

Route::get('CreateAccount','PageController@create_account');
Route::post('CreateAccount','PageController@store_account');



Route::get('tabledata','PageController@getTabledata')->name('tabledata');

Route::get('Tablebasic','PageController@getTablebasic')->name('Tablebasic');


Route::get('All',function(){

               $account_type= DB::table('account')->select('account_type')->where('account_type','=',1)->get();
             $count = DB::table('account')->count();
   
    	echo "<pre>";
	print($count);
	echo "</pre>";     
   
          
 
	/*$data =DB::table('arduino')-> get();
	echo "<pre>";
	print($data);
	echo "</pre>";*/
	
});