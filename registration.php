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

        <h1>Registration form</h1>
        <hr>
        <p> Please fill all informations below. 
        
        </p>
    </div>
    <div id="frm">

        <form action="reg_process.php" method="POST">

            <table class="frm-table">
                <tr>
                    <td>
                        <label>User name</label>
                    </td>
                    <td>
                        <input type="text" id="user" name="user" class="text-box" required />
                    </td>

                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" id="pass" name="password" class="text-box" required />


                    </td>
                </tr>


            </table>



            <input type="submit" id="btn" value="sign up" />


        </form>
    </div>

</body>

</html>