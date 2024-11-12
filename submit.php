<?php

    // Database Connection Details
  
    $hostname = 'localhost';
    $dbname = 'db2104';
    $username = 'root';
    $password = '';

    //Connect into the database using mysqli
    $conn = new mysqli(hostname: $hostname,username: $username,password: $password,database: $dbname);


        $sql;


    if ($conn->connect_error){
        echo "Connection Failed! " . $conn->connect_error;
    } else{
        echo "Connection Successful";

        $sql= "INSERT INTO dbauth(username, password) VALUES ($username, $password)";

        try {
            mysqli_query($conn, $sql);
            echo "OK";
        }   
        catch(mysqli_sql_exception) {
            echo "eme";
        }
       
        mysqli_close($conn);
    }


    




?>