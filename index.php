<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = "localhost";
$user = "root";
$password = "";
$dbName = "edu-php";

$link = mysqli_connect($host, $user, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");


if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}


$query = "SELECT * FROM pages WHERE url='$page'";
$result = mysqli_query($link, $query) or die(mysqli_erorr($link));
$page = mysqli_fetch_assoc($result);

$title = $page['title'];
$content = $page['text'];

include "layout.php";

