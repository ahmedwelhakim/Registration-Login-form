<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="frm">

<form action="process.php" method="POST">
    <p>
        <label >User name</label>
        <input type="text" id="user" name="user"/>
    </p>

    <p>
        <label >Password</label>
        <input type="password" id="pass" name="password"/>
    </p>

    <p>
        <input type="submit" id="btn" value="login"/>
    </p>

</form>
</div>

</body>
</html>