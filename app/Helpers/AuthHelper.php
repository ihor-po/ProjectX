<?php

namespace App\Helpers;

class AuthHelper
{
	public static function Auth() : bool
	{
		$res = false;

		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		{
			$res = true;
		}

		return $res;
	}
}