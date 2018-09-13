<?php

namespace App\Controllers;

use Framework\View;
use Framework\Controller;
use App\Helpers\AuthHelper;
use App\Helpers\Session;
use App\Helpers\TraitsHelper as Traits;
use App\Models\User;

class LoginController extends Controller
{
	protected function before()
    {
    	if (AuthHelper::Auth())
    	{
    		Traits::Redirect('/feeds');
    	}
    }

    protected function after()
    {
    }

	 public function index()
	 {
	 	$title = APP_TITLE . ' :: Вход';
	 	View::render('login', compact('title'));
	 }

	 public function forgotPassword()
	 {
	 	$title = APP_TITLE . ' :: Восстановить пароль';
	 	View::render('forgot-password', compact('title'));
	 }

	 public function register()
	 {
	 	$title = APP_TITLE . ' :: Регистрация';
	 	View::render('register', compact('title'));
	 }

	 public function error()
	 {
	 	$title = APP_TITLE . ' :: ERROR';
	 	View::render('404', compact('title'));
	 }

	 public function login()
	 {
	 	$title = APP_TITLE . ' :: Вход';

	 	if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['password']))
	 	{
	 		$user = User::getByEmail($_POST['email']);

	 		if (isset($user) && !empty($user))
	 		{
	 			if (password_verify($_POST['password'], $user['password']))
	 			{
	 				Session::initSession($user);
	 				Traits::Redirect('/feeds');
	 			}
		 		else
		 		{
		 			$error = "Неверный пароль!";
		 		}
	 		}
	 		else
	 		{
				$error = "Такого пользователя не существует!";
	 		}
	 	}
	 	else
	 	{
	 		$error = "Вы не ввели данные для входа";
	 	}
 		

 		View::render('login', compact('error', 'title'));

	 }

}