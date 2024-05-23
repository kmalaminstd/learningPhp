<?php


    /* ----------- Exceptions ----------- */

    /*
    PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
    */

    function divison($x){

        if(!$x){
            throw new Exception("division by zero");
        }

        return 1/$x;
    }

    
    try{
        echo divison(5);
        // echo divison(0);
    }catch(Exception $e){
        echo 'Cauht Exception ', $e->getMessage() .'';
    }finally{
        echo "first finally";
    }



?>