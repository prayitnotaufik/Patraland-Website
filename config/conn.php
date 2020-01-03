<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "patraland_web";

  $db = mysqli_connect($hostname, $username, $password, $dbname);

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
