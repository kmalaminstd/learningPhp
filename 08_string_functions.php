<?php

    /* ---------- String Functions -------- */

    /*
    Functions to work with strings
    https://www.php.net/manual/en/ref.strings.php
    */

    $string = 'Hello world';

    // Get the length of a string
    // echo strlen($string);

    // Find the position of the first occurrence of a substring in a string
    // echo strpos($string, "o");

    // Find the position of the last occurrence of a substring in a string
    // echo strrpos($string, "H");

    // Reverse a string
    // echo strrev($string);

    // Convert all characters to lowercase
    // echo strtolower($string);


    // Convert all characters to uppercase
    // echo strtoupper($string);

    // Uppercase the first character of each word
    // echo ucwords($string);

    // String replace
    // echo str_replace('world', 'Everyone', $string);

    // Return portion of a string specified by the offset and length
    // echo substr($string, 0, 3)
    // echo substr($string, 3);

    // Starts with
    if(str_starts_with($string, 'Hello')){
        echo "Yes </br>";
    }

    // ends with
    if(str_ends_with( $string, 'world')){
        echo "No </br>";
    }

    // html entities
    $entities = '<h1>Hello world</h1>';
    echo htmlentities($entities);

    // Formatted Strings - useful when you have outside data
    // Different specifiers for different data types
    printf('%s is a %s', 'Brad', 'nice guy');
    printf('1 + 1 = %f', 1 + 1); // float
?>