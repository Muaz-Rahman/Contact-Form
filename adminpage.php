<?php
session_start();
if(!isset($_SESSION["username"])) header("Location: redirect_login.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styling/adminpage.css">
    <title>Admin View</title>
</head>

<body>


<div id="welcome"><h1>Welcome, <?php echo $_SESSION["username"] ?>!</h1>
    <form method="get">
        <button name="logout">Log Out</button>
    </form>
</div>



</body>

</html>

<?php
if(isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
}
