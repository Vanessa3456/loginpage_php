<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="form">
        <h1>Login form</h1>
        <form name="form" method="post" action="login.php" onsubmit="return isvalid()" enctype="multipart/form-data">
            <label>Username:</label>
            <input type="text" name="user" id="user"><br><br>
            <label>Password:</label>
            <input type="password" name="pass" id="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>
    <script>
        function isValid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if (user.length == "" && pass.length == "") {
                alert("Username and Password must be filled out");
                return false;
            } else {
                if (user.length == "") {
                    alert("Username must be filled out");
                    return false;
                }
                if (pass.length == "") {
                    alert("Password must be filled out");
                    return false;
                }
            }


        }
    </script>

</body>

</html>