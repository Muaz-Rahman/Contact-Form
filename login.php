<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styling/login.css">
    <title>Login</title>
</head>

<body>
<div id="header"><h1>Login to Admin Page</h1></div>
<div id="login_prompt">
    <form action="" method="post">
        <div> <p>Username</p> <input type="text" name="username" required="required"></div>
        <div> <p>Password</p> <input type="text" name="password" required="required"></div>
        <div><button type="submit" id="submit_button">Login</button></div>
    </form>
</div>

<div class="back"><a href="index.php" >Not the admin? Go back</a></div>
</body>

<?php
//$username = "";
//$username = $_POST["username"];
//echo "Username is ".$username;
?>


</html>
