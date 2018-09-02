<?php

namespace App\Controllers;

use Framework\View;

define('APP_TITLE', 'Project - X');

class MainController
{
	 public function feed()
	 {
	 	$title = APP_TITLE . ' :: Лента сообщений';
	 	$mainTitle = APP_TITLE;

	 	View::render('feed', compact('title', 'mainTitle'));
	 }

	 public function userProfile($login)
	 {
	 	$title = APP_TITLE . ' :: Профиль';
	 	$mainTitle = APP_TITLE;

	 	if ($login)
	 	{
	 		$user = ['name' => 'Jone Dow', 'id' => '123'];
	 	}

	 	View::render('profile', compact('title', 'mainTitle', 'user'));
	 }

	 public function register()
	 {
	 	$title = APP_TITLE . ' :: Register';

	 	View::render('register', compact('title'));
	 }
}