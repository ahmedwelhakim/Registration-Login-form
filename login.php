<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome">

    <h1>Welcome to login test</h1>
    <p>the database has only one user. <br> <b>username:</b> testuser<br> 
<b>password:</b> testpass </p>
    </div>
<div id="frm">

<form action="process.php" method="POST">
    
    <table class="frm-table">
    <tr>
        <td> 
            <label >User name</label>
        </td>
        <td> 
            <input type="text" id="user" name="user" class="text-box"/>
        </td>
        
</tr><tr>
        <td>
        <label >Password</label>
        </td>
        <td> 
        <input type="password" id="pass" name="password" class="text-box"/>
    

        </td>
    </tr>
    

    </table>
       


        <input type="submit" id="btn" value="login"/>
    

</form>
</div>

</body>
</html>