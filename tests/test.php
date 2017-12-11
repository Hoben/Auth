<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hobben\Auth\MysqlDatabase;

define("HOST","localhost");
define("DATABASE_NAME","opac_web_schema");
define("USER_NAME","root");
define("USER_PASSWORD","");

$db = new MySQLDatabase();
$db->connect();
