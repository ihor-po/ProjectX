<?php

namespace Framework;

use PDO;
use App\Helpers\LogHelper;

abstract class Model
{
    static protected $db;
    
    protected static function DB()
    {
        if (null === static::$db) {

            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT;
        
            static::$db = new PDO($dsn, DB_USER, DB_PASS);
        
            // Включаем режим отображения ошибок в PDO
            static::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        return static::$db;
    }

    /**
     * Проверка существования подключения
     */
    protected static function _instance()
    {
        if (static::$db == null)
        {
            static::DB();
        }
    }
}
