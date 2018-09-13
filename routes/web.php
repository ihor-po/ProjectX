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
	Router::get('/logout', 'MainController@logout');

	Router::post('/register', 'RegisterController@register');

	Router::get('/feeds', 'MainController@feeds');
	Router::get('/profile/{login}', 'MainController@userProfile');
	Router::get('/settings/{login}', 'MainController@userSettings');

	Router::post('/sendFeed', 'FeedController@sendFeed');
	
});