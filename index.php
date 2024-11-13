<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isValid()" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br><br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
    <script>
        function isValid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;

            if (user === "" && pass === "") {
                alert("Username and password fields are empty!");
                return false;
            } else if (user === "") {
                alert("Username field is empty!");
                return false;
            } else if (pass === "") {
                alert("Password field is empty!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
