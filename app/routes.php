<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('post', 'Post');

Route::get('/', function(){

	return Redirect::action('HomeController@index');
});

Route::group(array('prefix'=>'blog'), function(){
	
	Route::get('/', 'HomeController@index');

	Route::get('/create', array('before' => 'auth',
	  'uses' => 'HomeController@showCreate'
	));

	Route::post('/create', 'HomeController@doCreate');
	Route::get('/show/{post}','HomeController@show');

	Route::get('/edit/{post}', array('before' => 'auth',
	  'uses' => 'HomeController@showEdit'
	));

	Route::post('/edit', 'HomeController@doEdit');

	Route::get('/login','HomeController@showLogin');
	Route::post('/login','HomeController@doLogin');

	Route::post('/logout','HomeController@doLogout');

	Route::post('/search', 'HomeController@postSearch');

});