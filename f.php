<?php 
    $fptr = fopen("file.txt", "r");

    if(!$fptr){
        die("unable to open this file. please enter valid file name!!!");
    }

    $content = fread($fptr, filesize("file.txt"));

    fclose($fptr);
    echo $content;

?>