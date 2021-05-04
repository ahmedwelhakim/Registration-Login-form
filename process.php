<?php
if(isset($_POST['username']))
{
    //Getting the data from the form  
    $username= $_POST['username'];
    $password = $_POST['password'];




    //connect the server to the database
    $mysql= mysqli_connect("localhost","root","");
    mysqli_select_db($mysql,"login"); 

    //Prevent sql injection
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($mysql,$username);
    $password=mysqli_real_escape_string($mysql,$password);



    //Query the database
    $result=mysqli_query($mysql,"select * From user where username ='$username' ") or die("failed to quert db".mysqli_error($mysql));

    $row = mysqli_fetch_array($result);


    if($row!= null && $row['username'] == $username && crypt($password, $row['password']) == $row['password'])
    {
        echo("<p>Login Success!, Welcome $username </p>");
    }else
    {
        echo("<p>Login Failed!</p>");
    }
};
?>