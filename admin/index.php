<?php

require_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::create(__DIR__ . '/..');
$dotenv->load();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = $_ENV['DB_SERVER'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];


$link = mysqli_connect($host, $user, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");


$query = "SELECT * FROM pages";
$result = mysqli_query($link, $query) or die(mysqli_erorr($link));
for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$title = 'Admin web page';
$content = "
<table class='table-pages'>
    <tr>
        <th>title</th>
        <th>url</th>
        <th></th>
        <th></th>
    </tr>";
foreach ($data as $page) {
    $content .= "
    <tr>
        <td>{$page['title']}</td>
        <td>{$page['url']}</td>
        <td>edit</td>
        <td>delete</td>
    </tr>";
}
$content .= '</table>';

include './layout/main.php';
