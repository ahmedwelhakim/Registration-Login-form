<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="nav-container">

        <nav id="nav">
            <h1>Registration form</h1>
        </nav>
    </div>
    <div class="body-container">
        <div id="frm">

            <form method="post" action="javascript:void(0)">

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

                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="submit" id="btn" value="sign up" onclick="ajax_post()" />

                        </td>
                    </tr>
                </table>





            </form>
            <div id="status"></div>
        </div>
    </div>
    <script src="regScript.js"></script>

</body>

</html>