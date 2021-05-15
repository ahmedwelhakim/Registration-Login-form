<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="nav-container">
        <nav id="nav">
            <h1>Welcome Guest</h1>
        </nav>
    </div>

    
    <div class="body-container">
    <p>Please Login or SignUp </p>
        <ul id="guest-list">
            <li>
                <button class="btn" onclick="document.location='login.php'">Login</button>
            </li>
            <li>
                <button class="btn" onclick="document.location='registration.php'">SignUp</button>
            </li>
        </ul>
    </div>

</body>

</html>