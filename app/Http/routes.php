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

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//DQ route start
get('/', 'WelcomeController@index');
get('menu', 'WelcomeController@menu');
get('order', 'WelcomeController@order');
get('contact', 'WelcomeController@contact');

post('adddish', 'WelcomeController@addDish');
post('removedish', 'WelcomeController@removeDish');
get('clear', 'WelcomeController@clear');
get('all', 'WelcomeController@all');


//DQ route end
