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

<?php
$name = "";
$email = "";
$phone = "";
$comment = "";

$conn = new mysqli("localhost", "root", "", "feedback_db");
if ($conn->connect_error) {
    die("connection failed");
}
$sql_writer = $conn->prepare("SELECT * FROM feedbacks");
if (!$sql_writer) {
    echo "failed";
}
$sql_writer->execute();
$sql_writer->bind_result($name, $email, $phone, $comment);
$count = 1;
$sql_writer->store_result();

while (($count - 1) != $sql_writer->num_rows()) {
    $sql_writer->fetch();
    echo "<h2 style='margin-left: 5%'> $count: $name --- $email --- $phone --- $comment</h2>";
    $count++;
}
$sql_writer->free_result();
$sql_writer->close();
$conn->close();
?>


</body>

</html>

<?php
if(isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
}
