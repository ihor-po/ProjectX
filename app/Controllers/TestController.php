<?php

namespace App\Controllers;

use Framework\View;

class TestController
{
	 public function index()
	 {
	 	$title = 'Project - X';

	 	View::render('index', compact('title'));
	 }

	 public function hello($userName = 'unknow')
	 {
	 	return "Welkom dear $userName";
	 }

	 public function cookiesInWork()
	 {
	 	setcookie('test', 'Hello Cookie', time() + 3600);

	 	var_dump($_COOKIE);

	 	session_start();

	 	//$_SESSION['new_data'] = 'SESSION!';

	 	var_dump($_SESSION);
	 }
}