<?php
    
    /* ---------- File Handling --------- */

    /* 
    File handling is the ability to read and write files on the server.
    PHP has built in functions for reading and writing files.
    */


    $file = 'extras/file.txt';

    if(file_exists($file)){
        // echo readfile($_file);
        $handler = fopen($file, 'r');
        $content = fread($handler, filesize($file));
        fclose($handler);
        echo $content;
    }else{
        $handler = fopen($file, 'w');
        $content = 'AL-AMIN' . PHP_EOL . 'SHOHAG' . PHP_EOL . 'MIZAN' ;
        fwrite($handler, $content);
        fclose($handler);
    }
?>