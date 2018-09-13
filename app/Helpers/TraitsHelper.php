<?php

namespace App\Helpers;

class TraitsHelper
{
	public static function Redirect($url, $statusCode = 303)
	{
		header('Location: ' . $url, true, $statusCode);
		die();
	}

	public static function ReloadPage($url = null)
	{
		header('Refresh:0;url='.$url);
	}
}

