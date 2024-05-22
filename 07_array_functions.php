<?php

    /* --------- Array Functions -------- */

    /*
    Functions to work with arrays
    https://www.php.net/manual/en/ref.array.php
    */

    $fruits = ['apple', 'banana', 'orange'];

    // array length
    // echo count($fruits);

    // search in array
    // $findElm = in_array('banana', $fruits);
    // echo in_array('orange', $fruits)
    
   
    

    // ==>> add element in array
    $fruits[] = "grapes";
    // add element in last
    array_push($fruits, "mango", "lime");
    // add element in first
    array_unshift($fruits, "water-melon");
    
    // print_r($fruits);

    // ==>> remove element from array
    array_pop($fruits);
    array_shift($fruits);
    unset($fruits[2]);
    // print_r($fruits);

    // ==>> split into chunk
    $chunkedArr = array_chunk($fruits, 2);
    // var_dump($fruits);
    // print_r($fruits);
    // print_r($chunkedArr);


    // concetanate array
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    // $mergedArr = array_merge($arr1, $arr2);
    $spredArr = [...$arr1, ...$arr2];

    // print_r($spredArr);

    // ===>> Combine arrays (Keys & values)
    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $combinedArr = array_combine($a, $b);

    // filped keys with values
    $flippedArr = array_flip($combinedArr);

    // create an array numbers with range

    $numbers = range(1, 20);

    // map through an array and create a new one
    $newNumbers = array_map(function($numbers){
        return "nums ($numbers)";
    }, $numbers);

    // filter array
    $lessThanTen = array_filter($numbers, fn($nums)=> $nums > 10);

    // Array Reduce
    // "carry" holds the return value of the previous iteration

    $sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);

    print_r($sum);



?>