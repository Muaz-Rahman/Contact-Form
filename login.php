<?php
session_start();
$conn = new mysqli("localhost", "root", "", "feedback_db");
if($conn->connect_error) {
    die("connection failed");
}
?>

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
<?php
$username = $_POST["username"] ?? null;
$password = $_POST["password"] ?? null;


$sql_username = "";
$sql_password = "";
$sql_writer = $conn->prepare("SELECT * FROM admin WHERE username='Muaz'");
if(!$sql_writer){
    echo "failed";
}

$sql_writer->execute();
$sql_writer->bind_result($sql_username,$sql_password);
$sql_writer->fetch();
$clicked = $_POST["login"] ?? null;

if(isset($clicked)) {
    if ($username == $sql_username && $password == $sql_password) {
        $_SESSION["username"] = $sql_username;
        $_SESSION["password"] = $sql_password;
        header("Location: adminpage.php");
    }
    else echo "<h1 style='text-align: center; color: white'>Login Failed! Try Again</h1>";
}

$sql_writer->close();
$conn->close();

?>
<div id="login_prompt">
    <form action="" method="post">
        <div> <p>Username</p> <input type="text" name="username" required="required"></div>
        <div> <p>Password</p> <input type="password" name="password" required="required"></div>
        <div><button type="submit" id="submit_button" name="login">Login</button></div>
    </form>
</div>

<div class="back"><a href="index.php" >Not the admin? Go back</a></div>
</body>



</html>
