<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "shohag");
    define("DB_PASS", "123456");
    define("DB_NAME", "php_dev");

    // create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // if connection lost the error message will be show
    if($conn->connect_error){
        die('Connection failed' . $conn->connect_error);
    }

    // if connection successfull 
    // echo "connected";

?>