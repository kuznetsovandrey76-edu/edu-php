<?php

    include 'front/init.php';

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

    include "front/layout.php";

