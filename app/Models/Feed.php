<?php

namespace App\Models;

use PDO;
use Framework\Model;
use App\Helpers;

class Feed extends Model
{
	private static function __instance()
	{
		parent::_instance();
	}

    public static function getAll($limit = 15): array
    {
    	static::_instance();

		$sql = "SELECT usr.`name` AS `name`, fds.`message` AS 'feed', fds.`date` AS 'date'
        FROM `feeds` AS fds
        LEFT JOIN `users` AS usr ON fds.`user_id` = usr.`id`
        ORDER BY `date` DESC LIMIT " . $limit;
		
		$stmt = static::$db->prepare($sql);	

		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

    public static function getUsersFeedas($userId, $limit = 15): array
    {
        static::_instance();

        $sql = "SELECT usr.`name` AS `name`, fds.`message` AS 'feed', fds.`date` AS 'date'
        FROM `feeds` AS fds
        LEFT JOIN `users` AS usr ON fds.`user_id` = usr.`id` 
        WHERE user_id = $userId
        ORDER BY `date` DESC LIMIT $limit";
        
        $stmt = static::$db->prepare($sql); 

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }     	


    public static function create(array $params): bool
    {
        $sql = 'INSERT INTO feeds (`user_id`, `message`, `date`) 
                VALUES (:user_id, :message, :date);';
        $stmt = static::db()->prepare($sql);
        return $stmt->execute([
            'user_id' => $params['user_id'],
            'message' => $params['message'],
            'date' => $params['date']
        ]);
    }

    private static function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}