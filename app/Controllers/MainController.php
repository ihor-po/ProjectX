<?php

namespace App\Controllers;

use Framework\View;
use Framework\Controller;
use App\Helpers\AuthHelper;
use App\Helpers\Session;
use App\Models\User;

class MainController extends Controller
{
	private $isAuth;
	private $mainTitle;
	protected function before()
    {
    	$mainTitle = APP_TITLE;

    	if (AuthHelper::Auth())
    	{
    		$this->isAuth = true;
    	}
    	else
    	{
    		return header("Location: /");
    	}
    }

    protected function after()
    {

    }

	 public function feed()
	 {
	 	$title = APP_TITLE . ' :: Лента сообщений';
	 	$mainTitle = APP_TITLE;

	 	$isAuth = $this->isAuth;

	 	$user = [];

	 	if ($isAuth)
	 	{
	 		$user = ['login' => $_SESSION['login']];
	 	}

	 	View::render('feed', compact('title', 'mainTitle', 'isAuth', 'user'));
	 }

	 public function userProfile($login)
	 {
	 	$title = APP_TITLE . ' :: Профиль';
	 	$mainTitle = APP_TITLE;

	 	$isAuth = $this->isAuth;

 		$user = ['name' => $_SESSION['name'], 'login' => $_SESSION['login']];

	 	View::render('profile', compact('title', 'mainTitle', 'user', 'isAuth'));
	 }

	 public function userSettings($login)
	 {
	 	$title = APP_TITLE . ' :: Настройки';
	 	$mainTitle = APP_TITLE;

	 	if ($login)
	 	{
	 		$user = ['name' => 'Jone Dow', 'id' => '123'];
	 	}

	 	View::render('settings', compact('title', 'mainTitle', 'user'));
	 }
}