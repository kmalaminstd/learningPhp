<?php
/* ------------ Functions ----------- */

    /*
    ** Function Syntax
    function functionName($arg1, $arg2, ...) {
        // code to be executed
    }

    - Functions have their own local scope as opposed to global scope
    */

    //  $y = 20;

    //  function registerUser(){
    //     global $y;
    //     $x = 10;
    //     echo "${y}";
    //  }

    // Running a function
    // registerUser();

    // Adding params
    // function registerUser2($username)
    // {
    //   echo "User ${username} has been registered!";
    // }

    // Pass in an argument
    // registerUser2('Brad');

    // Returning values

        // function add($num1, $num2){
        //     return $num1 + $num2;
        // }

        // $sum = add(5, 3);
        // echo $sum;

    // Adding default values
    // function subtract($num1 = 10, $num2 = 5)
    // {
    //   return $num1 - $num2;
    // }

    // echo subtract();

    // Assigning anonymous functions to variables. Often used for closures and callback functions
    // $add = function ($num1, $num2) {
    //   return $num1 + $num2;
    // };

    // echo $add(5, 5);

    // Arrow functions  
        $multiply = fn($num1, $num2) => $num1 * $num2;

        echo $multiply(5, 5)

?>