<?php

namespace Hoben\Auth;

class DBContext
{
    public static function startDB()
    {
        return new \PDO("mysql:host=" . Config::HOST . ";dbname=" . Config::DATABASE_NAME . ";", Config::USER_NAME, Config::USER_PASSWORD);
    }

    public static function endDB($db)
    {
        $db = null;
    }
}
