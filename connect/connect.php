<?php
    $host = "localhost";
    $user = "dsy1943";
    $pw =  "ektmf4355!";
    $db = "dsy1943";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");
    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect true";
    }
?>