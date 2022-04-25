<?php
include_once "database/connection.php";
include_once "classes/user.php";
include_once "classes/follow.php";
include_once "classes/tweet.php";
include_once "classes/message.php";

global $pdo;

session_start();

date_default_timezone_set('Asia/kolkata');

$getFromU = new User($pdo);
$getFromT = new Tweet($pdo);
$getFromF = new Follow($pdo);
$getFromM = new Message($pdo);

define("BASE_URL","http://127.0.0.1/twitter/");

?>