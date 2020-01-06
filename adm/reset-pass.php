<?php
session_start();
include("../config/conn.php");
if(@$_SESSION['status'] != "login") {
  echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='index.php';</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PT. Patraland - Administrator</title>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">


        <h2>Reset Password</h2><br>
        <p>
          <form action="" method="post">
            <table cellpadding="5">
              <tr>
                <td>Current Password</td>
              </tr>
              <tr>
                <td><input type="text" name="currpwd" required></td>
              </tr>
              <tr>
                <td>New Password</td>
              </tr>
              <tr>
                <td><input type="text" name="newpwd" required></td>
              </tr>
              <tr>
                <td>Confirm Password</td>
              </tr>
              <tr>
                <td><input type="text" name="confpwd" required></td>
              </tr>
              <tr>
                <td><br><input class="btn btn--primary btn--sm" type="submit" name="submit" value="Reset"></td>
              </tr>
            </table>
          </form>
        </p>

    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

<?php
if(isset($_POST["submit"])) {
  $username = $_SESSION['username'];
  $currpwd = $_POST['currpwd'];
  $newpwd = $_POST['newpwd'];
  $confpwd = $_POST['confpwd'];
  $sql = "SELECT * FROM tb_login WHERE username = '$username'";
  $query = $db->query($sql);
  $hasil = $query->fetch_array();
   if($currpwd != $hasil['password']) {
     echo "<script type='text/javascript'>alert('Password Salah!');window.location.href='reset-pass.php';</script>";
   }
   if($confpwd != $newpwd) {
     echo "<script type='text/javascript'>alert('Cek kembali konfirmasi password');window.location.href='reset-pass.php';</script>";
   }
   if($currpwd == $hasil['password'] && $confpwd == $newpwd) {
     $sql1 = "UPDATE tb_login SET password = '$newpwd' WHERE username = '$username'";
     $query1 = $db->query($sql1);
     $hasil1 = $query1->fetch_assoc();
     header("Location:reset-pass.php?msg=success");
    }
}
?>
