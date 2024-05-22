<?php

    /* ---- Conditionals & Operators ---- */

    /* ------------ Operators ----------- */

    /*
        < Less than
        > Greater than
        <= Less than or equal to
        >= Greater than or equal to
        == Equal to
        === Identical to
        != Not equal to
        !== Not identical to
    */

    /* ---------- If Statements --------- */

    /*
    ** If Statement Syntax
    if (condition) {
    // code to be executed if condition is true
    }
    */

    $age = 18;
    
    // if($age >= 18){
    //     echo "you are old enought to vote" ;
    // }else{
    //     echo "Sorry you are not permitted for vote" ;
    // }

    //else if conditions

    $posts = ['first post', 'second post'];

    // if(!empty($posts)){
    //     echo $posts[0];
    // }else{
    //     echo 'NO posts';
    // }

    // echo !empty($posts) ? $posts[0] : 'No Posts';

    // $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
    // $firstPost = !empty($posts) ? $posts[0] : null;

    $firstPost = $posts[0] ?? null ;

    // echo $firstPost;

    $favColor = 'yellow';

    switch($favColor){
        case 'red' :
            echo "your favourite color is red";
            break;
        case 'green':
            echo "your favourite color is green" ;
            break;
        case 'blue':
            echo "your favourite color is blue" ;
            break;
        default:
            echo "your favourite color is not green, green or blue" ;
    }

?>