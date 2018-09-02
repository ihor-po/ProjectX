<?php

/**
* Keep router configs
*/

use Framework\Router;

Router::group(['namespace' => '\App\Controllers'], function() {
	Router::get('/', 'HomeController@index');
	Router::get('/forgot_password', 'HomeController@forgotPassword');
	Router::get('/register', 'HomeController@register');
	Router::get('/error', 'HomeController@error')
	Router::post('/login', 'HomeController@login');

	Router::get('/feed', 'MainController@feed');
	Router::get('/profile/{login}', 'MainController@userProfile');
	
	Router::get('/hello/{userName?}', 'TestController@hello');
	Router::get('/cookie', 'TestController@cookiesInWork');
});