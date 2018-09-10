<?php

namespace App\Models;

use PDO;
use Framework\Model;
use App\Helpers;


class User extends Model
{
	public static function __instance()
	{
		parent::_instance();
	}

    public static function getAll(): array
    {
    	static::_instance();

		$sql = "SELECT * FROM users";
		
		$stmt = static::$db->prepare($sql);	

		$stmt->execute();


		return $stmt->fetchAll(PDO::FETCH_OBJ);

	}    	

    public static function getByEmail(string $email)
    {
    	static::_instance();

        $stmt = static::db()->prepare('SELECT * FROM users WHERE email = :email');

        $stmt->execute([':email' => $email]);
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // public static function create(array $params): bool
    // {
    //     $sql = 'INSERT INTO users (email, name, password, registered, last_login) 
    //             VALUES (:email, :name, :password, :registered, :last_login)';
    //     $stmt = static::db()->prepare($sql);
    //     return $stmt->execute([
    //         ':email' => $params['email'],
    //         ':name' => $params['name'],
    //         ':password' => self::hashPassword($params['password']),
    //         ':registered' => time(),
    //         ':last_login' => time(),
    //     ]);
    // }
    // protected static function hashPassword(string $password): string
    // {
    //     return password_hash($password, PASSWORD_DEFAULT);
    // }
}