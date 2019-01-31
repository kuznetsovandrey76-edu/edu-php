<?php

require_once "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = $_ENV['DB_SERVER'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

$link = mysqli_connect($host, $user, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");


if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '/';
}


$query = "SELECT * FROM pages WHERE url='$page'";
$result = mysqli_query($link, $query) or die(mysqli_erorr($link));
$page = mysqli_fetch_assoc($result);

$title = $page['title'];
$content = $page['text'];

include "layout.php";

