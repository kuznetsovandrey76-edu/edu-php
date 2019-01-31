<?php
include 'init.php';

if(!empty($_SESSION['auth'])) { // Если авторизован
    
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
    
} else {
    header('Location: /admin/login.php'); die();
}


