<?php

    // Database Connection Details
  
    $hostname = 'localhost';
    $dbname = 'db2104';
    $username = 'root';
    $password = '';

    //Connect into the database using mysqli
    $conn = new mysqli(hostname: $hostname,username: $username,password: $password,database: $dbname);



    if ($conn->connect_error){
        echo "Connection Failed! " . $conn->connect_error;
    } else{
        echo "Connection Successful";
    }



?>