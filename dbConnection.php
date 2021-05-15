<?php

    $host="localhost";
    $user="root";
    $pass="";
    $database="login";

    $conn=mysqli_connect($host,$user,$pass);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //If database doesn't exist
    if (!mysqli_select_db($conn, $database)) {
      $sql="CREATE DATABASE ". $database;
     
      $res=mysqli_query($conn,$sql);
     
    
    }
    mysqli_select_db($conn, $database);
    //if Table doesn't exist create it
    $exists = mysqli_query($conn,"select 1 from user");

    if($exists == FALSE){
       
    $sql="CREATE TABLE user (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(100) NOT NULL UNIQUE,
      password VARCHAR(100) NOT NULL
      )";
    $res2=mysqli_query($conn,$sql);
    }

    
?>