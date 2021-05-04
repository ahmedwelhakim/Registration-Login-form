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

        <h1>Log in Form</h1>
        <hr>
        
    </div>
    <div id="frm">

  
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
            <input type="submit" onclick="ajax_post()" id="btn" value="login" />
      
    </div>

    <div id="status">
    
    </div>
<script src="loginScript.js"></script>
</body>

</html>