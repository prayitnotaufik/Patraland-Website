<?php
session_start();
include('../config/conn.php');

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];

$sql = "INSERT INTO tb_message (name,email,website,message) VALUES ('$name','$email','$website','$message')";

if (mysqli_query($db, $sql)) {
    header("Location:../contact.php");
}

mysqli_close($db);
