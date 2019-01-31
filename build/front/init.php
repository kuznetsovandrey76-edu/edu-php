<?php

    // require_once "vendor/autoload.php";
    // $dotenv = Dotenv\Dotenv::create(__DIR__);

    require_once "../vendor/autoload.php";
	$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../..');
    $dotenv->load();

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $host = $_ENV['DB_SERVER'];
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];
    $dbName = $_ENV['DB_NAME'];

    $link = mysqli_connect($host, $user, $password, $dbName);
    mysqli_query($link, "SET NAMES 'utf8'");