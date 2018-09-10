<?php

namespace App\Helpers;

class Session
{
	public static function initSession($user) : void
	{
		if (!static::issetSession())
		{
			session_start();
		}
		
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['login'] = $user['login'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['avatar'] = $user['avatar'];

	}

	 static function issetSession() : bool
	{
		return (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) ? true : false;
	}

	public static function closeSession() : void
	{
		session_unset();
	}
}