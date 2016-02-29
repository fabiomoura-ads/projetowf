<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {    
	return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::resource("amigo", "AmigoController");
//Route::resource("user", "UserController");
//Route::resource("u/amigos/{id}", "UserController@amigos");

//Route::post("user/active", "UserController@activeUser");
	
	
Route::group(array('prefix' => 'api'), function(){

	Route::resource("user", "UserController");	
	Route::get("user/active/{id}", "UserController@active");	
});


Route::group(['middleware' => ['web']], function () {
	
});
	
	