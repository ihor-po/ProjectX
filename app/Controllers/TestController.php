<?php

namespace App\Controllers;

class TestController
{
	 public function index()
	 {
	 	return 'I\'m alive';
	 }

	 public function hello($userName = 'unknow')
	 {
	 	return "Welkom dear $userName";
	 }
}