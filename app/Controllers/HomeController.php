<?php

namespace App\Controllers;

use Framework\View;

class HomeController
{
	 public function index()
	 {
	 	$title = 'Project - X :: Login';

	 	View::render('login', compact('title'));
	 }
}