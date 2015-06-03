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

// Route::get('home', 'HomeController@index');

 Route::controllers([
 	'auth' => 'Auth\AuthController',
 	'password' => 'Auth\PasswordController',
 ]);

//DQ route start
Route::filter('cache', function($route, $request, $response, $age=60){
    $response->setTtl($age);
});
//get('todo', array('after' => 'cache:180', 'uses' => 'VueController@index'));

get('/', 'WelcomeController@index');
get('menu', 'WelcomeController@menu');
//get('menu_page', array('after' => 'cache:120', 'uses' => 'WelcomeController@menuPage'));

get('order', ['uses' => 'WelcomeController@order', 'middleware'=> 'order']);
get('contact', 'WelcomeController@contact');

post('adddish', 'WelcomeController@addDish');
post('removedish', 'WelcomeController@removeDish');
post('email', 'WelcomeController@email');
get('clear', 'WelcomeController@clear');
//get('all', 'WelcomeController@all');
//get('set', 'WelcomeController@set');
//post('setHdlr', 'WelcomeController@setHdlr');

//DQ route end
