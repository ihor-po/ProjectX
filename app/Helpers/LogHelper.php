<?php

namespace App\Helpers;

require_once 'config/app.php';

use DateTime;


class LogHelper
{
	public static function setLogData(string $msg) : void
	{
		$format = "Y-m-d";

		$date = new DateTime('now');

		$file = APP_LOG . $date->format($format) . '.log';
		
		try
		{
			file_put_contents($file, $msg . PHP_EOL, FILE_APPEND);
		}
		catch (\Exeption $ex)
		{
			echo $ex . PHP_EOL;
		}
	}
}