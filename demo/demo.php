<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hoben\Auth\MysqlDatabase;
use Hoben\Auth\Session;

define("HOST", "localhost");
define("DATABASE_NAME", "hoben-auth");
define("USER_NAME", "root");
define("USER_PASSWORD", "");
define("USER_TABLE", "user-auth");

$db = new MySQLDatabase();
$db->connect();
