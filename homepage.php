<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>homepage</title>

</head>

<body>
    <?php session_start(); ?>
    <div class="nav-container">
        <nav id="nav">
            <h1>Welcome <?php echo ($_SESSION['username']); ?></h1>
        </nav>
    </div>
</body>

</html>