<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comment = $_POST["comment"];

$conn = new mysqli("localhost", "root", "", "feedback_db");
if($conn->connect_error) {
    die("connection failed");
}

$sql_writer = $conn->prepare("INSERT INTO feedbacks (name, email, phone, comment) VALUES (?, ?, ?, ?)");
if(!$sql_writer){
    echo "failed";
}
$sql_writer->bind_param("ssss",$name,$email,$phone,$comment);
$sql_writer->execute();

if($sql_writer)
include "success.php";

$sql_writer->close();
$conn->close();
?>