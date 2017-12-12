<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hoben\Auth\DBContext;
use Hoben\Auth\UserAuth;

$db = DBContext::startDB();
UserAuth::registerUser("habib", "habi");
//echo UserAuth::getUserByLogin("habib");
DBContext::endDB($db);
