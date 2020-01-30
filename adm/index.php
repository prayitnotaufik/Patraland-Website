<?php
include("../config/conn.php");
session_start();
if(@$_SESSION['status'] == "login") {
  echo "<script type='text/javascript'>window.location.href='home.php';</script>";
}
?>
<link rel="shortcut icon" type="image/png" href="../images/icon2.png">
<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/login.css" rel="stylesheet">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
<!------ Include the above in your HEAD tag ---------->

<!--
you can substitue the span of reauth email for a input with the email and
include the remember me checkbox
-->
<div class="container">
  <div class="card card-container">
    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
    <center><h2>Patraland</h2></center><br>
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" action="proc/proc-login.php" method="post">
      <span id="reauth-email" class="reauth-email"></span>
      <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
    </form><!-- /form -->
  </div><!-- /card-container -->
</div><!-- /container -->
