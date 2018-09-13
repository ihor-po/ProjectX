<?php

namespace App\Controllers;

use Framework\View;
use Framework\Controller;
use App\Helpers\AuthHelper as Auth;
use App\Helpers\Session;
use App\Helpers\TraitsHelper as Traits;
use App\Models\User;

class MainController extends Controller
{
	private $isAuth;
	private $mainTitle;
	protected $user;

	protected function before()
    {
    	$mainTitle = APP_TITLE;

    	if (Auth::Auth())
    	{
    		$this->isAuth = true;
    		$this->user = ['name' => $_SESSION['name'], 'login' => $_SESSION['login']];
    	}
    	else
    	{
    		Traits::Redirect('/');
    	}
	}
    

    protected function after()
    {

    }

	 public function feeds()
	 {
	 	$title = APP_TITLE . ' :: Лента сообщений';
	 	$mainTitle = APP_TITLE;
	 	$isAuth = $this->isAuth;
	 	$user = $this->user;

	 	View::render('feed', compact('title', 'mainTitle', 'isAuth', 'user'));
	 }

	 public function userProfile($login)
	 {
	 	$title = APP_TITLE . ' :: Профиль';
	 	$mainTitle = APP_TITLE;
	 	$isAuth = $this->isAuth;
	 	$user = $this->user;

	 	View::render('profile', compact('title', 'mainTitle', 'user', 'isAuth'));
	 }

	 public function userSettings($login)
	 {
	 	$title = APP_TITLE . ' :: Настройки';
	 	$mainTitle = APP_TITLE;
	 	$user = $this->user;

	 	View::render('settings', compact('title', 'mainTitle', 'user'));
	 }

  	public function logout()
	{
		Session::closeSession();
		Traits::Redirect('/');
	}
}