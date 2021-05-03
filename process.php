<?php

//Getting the data from the form  
$username= $_POST['user'];
$password = $_POST['password'];

$password = sha1($password);


//connect the server to the database
$mysql= mysqli_connect("localhost","root","");
mysqli_select_db($mysql,"login"); 

//Prevent sql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($mysql,$username);
$password=mysqli_real_escape_string($mysql,$password);



//Query the database
$result=mysqli_query($mysql,"select * From user where name ='$username' ") or die("failed to quert db".mysqli_error($mysql));

$row = mysqli_fetch_array($result);

if($row!= null && $row['name'] == $username && $row['password']==$password)
{
    print("Login Success!, Welcome $username");
}else
{
    print("Login Failed!");
}

?>