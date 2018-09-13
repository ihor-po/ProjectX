<?php

namespace App\Controllers;

use App\Helpers\Session;
use App\Helpers\TraitsHelper as Traits;
use App\Helpers\ValidationHelper as Validation;
use App\Models\Feed;
use DateTime;

class FeedController
{

	 public function sendFeed()
	 {
	 	if (!empty($_POST))
	 	{
	 		$feed = Validation::clean($_POST['feed']);
	 		$date = new DateTime('now');
	 		$data = ['user_id' => $_SESSION['user_id'], 'message' => $feed, 'date' => $date->format('Y-m-d H:i:s')];
	 		Feed::create($data);
			Traits::ReloadPage('/feeds');
	 	}
	 	
	 }
}