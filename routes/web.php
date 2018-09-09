<?php

/**
* Keep router configs
*/

use Framework\Router;

Router::group(['namespace' => '\App\Controllers'], function() {
	Router::get('/', 'LoginController@index');
	Router::get('/forgot_password', 'LoginController@forgotPassword');
	Router::get('/register', 'LoginController@register');
	Router::get('/error', 'LoginController@error');
	Router::post('/login', 'LoginController@login');

	Router::get('/feed', 'MainController@feed');
	Router::get('/profile/{login}', 'MainController@userProfile');
	Router::get('/settings/{login}', 'MainController@userSettings');
	
	Router::get('/hello/{userName?}', 'TestController@hello');
	Router::get('/cookie', 'TestController@cookiesInWork');
});