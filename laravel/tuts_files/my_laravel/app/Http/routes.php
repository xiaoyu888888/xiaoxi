<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('about','MyController@getAbout');
Route::get('/about',function(){

	$user =new App\User();

	return $user->userRead();

});

Route::any('/index', 'MyController@index');
Route::any('/delete', 'MyController@delete');  
Route::any('/add', 'MyController@add');  
Route::any('/add_do', 'MyController@add_do');  
Route::any('/xiu', 'MyController@xiu'); 
Route::any('/xiu_do', 'MyController@xiu_do');
Route::any('/res', 'MyController@res');
Route::any('/tian', 'MyController@tian');
Route::any('/tian_do', 'MyController@tian_do');
Route::any('/show', 'MyController@show');
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {

// 	return '欢迎使用！！！！！';
// });
