<?php
    //ways to connect to a MySQL DataBase
    //1. MySQLi extension
    //2. PDO

    //connection to the database

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database= "mir";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password , $database);

    //creating database
    $sql = "CREATE DATABASE mir";
    $result = mysqli_query($conn, $sql);

    //Die if connection was not succesful 
    
    if(!$conn){
        dir("Sorry we failed to connec: " . mysqli_connect_error());
    }
    else{
        echo "connection was successful<br>";
    }

    // Create a table in the db
    $sql = "CREATE TABLE `btrip` (`sno` INT(6) NOT NULL , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , `price` INT(6) NOT NULL )";

    //check for the table creation success
    if($result){
        echo "The table was created successfully!<br>";

    }
    else{
        echo "The table was not created successfully because of this error ----> " . mysqli_error($conn);
    }
    
?>