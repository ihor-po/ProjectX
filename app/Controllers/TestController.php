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
}