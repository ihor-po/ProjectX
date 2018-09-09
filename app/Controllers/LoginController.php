<?php

namespace App\Controllers;

use Framework\View;
use Framework\Controller;
use App\Helpers\AuthHelper;
use App\Models\User;

class LoginController extends Controller
{
	protected function before()
    {
    	if (AuthHelper::Auth())
    	{
    		return header("Location: /feed");
    	}
    }

    protected function after()
    {

    }

	 public function index()
	 {
	 	$title = APP_TITLE . ' :: Login';

	 	View::render('login', compact('title'));
	 }

	 public function forgotPassword()
	 {
	 	$title = APP_TITLE . ' :: Forgot password';

	 	View::render('forgot-password', compact('title'));
	 }

	 public function register()
	 {
	 	$title = APP_TITLE . ' :: Register';

	 	View::render('register', compact('title'));
	 }

	 public function error()
	 {
	 	$title = APP_TITLE . ' :: ERROR';

	 	View::render('404', compact('title'));
	 }

	 public function login()
	 {
	 	$title = APP_TITLE;
	 	$mainTitle = $title;

 		$user = User::getByEmail($_POST['email']);

	 	if (!$user)
	 	{
	 		return header("Location: /feed");
	 	}
	 	else
	 	{

	 	}

	 }
}