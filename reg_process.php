<?php

//Getting the data from the form  
$username= $_POST['user'];


$blowfish_salt = bin2hex(openssl_random_pseudo_bytes(22));
$hash = crypt($_POST['password'], "$2a$12$".$blowfish_salt);



//connect the server to the database
$conn = new mysqli("localhost", "root","", "login");
mysqli_select_db($conn,"login"); 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  

//Prevent sql injection
$username=stripcslashes($username);
$password=stripcslashes($hash);
$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);

//db sql
$sql = "INSERT INTO user (username, password) VALUES ('$username','$password' )";
if( mysqli_query($conn,$sql))
{
    echo"<p>Successfully registerd!</p>";
    header("Location: login.php");
    exit();
}
else{
    echo"<p> Registeration Failed!</p> <br>";
}

?>