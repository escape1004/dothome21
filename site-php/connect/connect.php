<?php
    $host = "localhost";
    $user = "escape1004";
    $pass = "es4477447700!";
    $db = "escape1004";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>