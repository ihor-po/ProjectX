<?php

/**
* Keep router configs
*/

use Framework\Router;

Router::group(['namespace' => '\App\Controllers'], function() {
	Router::get('/', 'HomeController@index');
	Router::get('/hello/{userName?}', 'TestController@hello');
});