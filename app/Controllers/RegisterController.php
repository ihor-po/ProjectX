<?php

namespace App\Controllers;

use Framework\View;
use Framework\Controller;
use App\Helpers\AuthHelper as Auth;
use App\Helpers\Session;
use App\Helpers\TraitsHelper as Traits;
use App\Models\User;
use App\Helpers\ValidationHelper as Validation;

class RegisterController extends Controller
{
	private $isAuth;
	private $mainTitle;
	protected $user;

	protected function before()
    {
    	$mainTitle = APP_TITLE;

    	if (Auth::Auth())
    	{
    		Traits::Redirect('/feed');
    	}
    }

    protected function after()
    {

    }

	public function register()
	{
		$title = APP_TITLE . ' :: Регистрация';

		if (!empty($_POST))
		{
			$data = [
				'login' => $_POST['login'],
				'email' => $_POST['email'],
				'name' => $_POST['name'],
				'about' => $_POST['about']
			];

			if (Validation::requiredFields($_POST['login'], $_POST['email'], $_POST['password'], $_POST['confirm']))
			{
				if (Validation::email($_POST['email']))
				{
					$user = User::getByLogin(Validation::clean($_POST['login']));

					if (!$user)
					{
						$user = User::getByEmail(Validation::clean($_POST['email']));

						if(!$user)
						{
							if (Validation::password($_POST['password'], $_POST['confirm']))
							{
								$userData = [
								'login' => Validation::clean($_POST['login']),
								'email' => Validation::clean($_POST['email']),
								'password' => $_POST['password'],
								'name' => (!empty($_POST['name'])) ? Validation::clean($_POST['name']) : "",
								'about' => (!empty($_POST['about'])) ? Validation::clean($_POST['about']) : "",
								];
						
								if (User::create($userData))
								{
									$user = User::getByLogin($userData['login']);

									Session::initSession($user);
			 						Traits::Redirect('/feeds');
								}
								else
								{
									$error = 'Ошибка создания пользователя!';		
								}
							}
							else
							{
								$error = 'Ошибка заполнения пароля!';	
							}
						}
						else
						{
							$error = 'Email уже занят!';
						}
					}
					else
					{
						$error = 'Логин уже занят!';	
					}
				}
				else
				{
					$error = 'Ошибка заполнения Email!';
				}
			}
			else
			{
				$error = 'Обязательные поля не заполнены!';
			}
		}
		else
		{
			$error = 'Вы не ввели свои данные!';
		}

		View::render('register', compact('error', 'title', 'data'));
	}
}