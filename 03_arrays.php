<?php

    // arrays ===>>

    // simple arrays
    $number = [1, 44, 35, 25];
    $fruits = array("apple", "orange", "pine-apple");

    // print_r($number);
    // var_dump($number);
    // echo $number[0];

    // associative array ===>>>
    $colors = [
        1 => "red",
        4 => "green",
        6 => "blue"
    ];

    // echo $colors[4]

    $hex = [
        "red" => "#f00",
        "green" => "#0f0",
        "blue" => "#00f",
    ];

    // echo $hex["green"];


    // we can use multi dimensional arrays

    $people = [
        [
            'first_name' => 'k.m',
            'last_name' => 'alamin',
            'email' => 'alamkinkstd@gmail.com'
        ],
        [
            'first_name' => 'k.m',
            'last_name' => 'alamin',
            'email' => 'alamkinkstd@gmail.com'
        ],        [
            'first_name' => 'k.m',
            'last_name' => 'alamin',
            'email' => 'alamkinkstd@gmail.com'
        ],
    ];

    var_dump(json_encode($people));

?>