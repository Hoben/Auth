<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hoben\Auth\MysqlDatabase;
use Hoben\Auth\Session;

$db = new MySQLDatabase();
$db->connect();
