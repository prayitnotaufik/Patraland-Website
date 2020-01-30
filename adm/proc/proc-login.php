<?php
include("../../config/conn.php");
if(isset($_POST["submit"])) {
  $username = @$_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM tb_login WHERE username = '$username'";
  $query = $db->query($sql);
  $hasil = $query->fetch_assoc();
  if($query->num_rows == 0) {
    echo "<script type='text/javascript'>alert('Username dan Password tidak ada!');window.location.href='../index.php';</script>";
  } else {
    if($pass <> $hasil['password']) {
      echo "<script type='text/javascript'>alert('Password Salah!');window.location.href='../index.php';</script>";
    } else {
      session_start();
      $_SESSION['username'] = $hasil['username'];
      $_SESSION['status'] = "login";
      header('location:../home.php');
    }
  }
}
?>
