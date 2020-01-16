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
  <link rel="shortcut icon" type="image/png" href="../images/icon2.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PT. Patraland - Administrator</title>
  <style>
  table {
    font-size:17px;
  }
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">


      <h2>Contact Messages</h2></h2><br>
      <p>
        <div style="overflow-x:auto;">
          <table cellpadding="5" width="100%" border="1">
            <tr style="background:#ddd; font-weight:bolder;">
              <th>Name</th>
              <th>Email</th>
              <th>Website</th>
              <th>Message</th>
              <th colspan="2"></th>
            </tr>
            <?php
            $no = 1;
            $sql = "SELECT * FROM tb_message";
            $hasil = mysqli_query($db,$sql);
            while($data = mysqli_fetch_assoc($hasil)) {
              ?>
              <tr>
                <td><?php echo $data['name']; ?></td>
                <td><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td>
                <td><?php echo $data['website']; ?></td>
                <td><?php echo $data['message']; ?></td>
                <td align="center"><br><a class="btn btn--accent btn--sm" href="?id=<?php echo $data['id_message']; ?>&act=del">Hapus</a><br><br></td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </p>
      <?php
      if(@$_GET['act']=='del') {
        $id = $_GET['id'];
        $sqldel = "DELETE FROM tb_message WHERE id_message = '$id'";
        $result = mysqli_query($db,$sqldel);
        echo "<script type='text/javascript'>alert('Hapus data berhasil!');window.location.href='msg.php';</script>";
      }
      ?>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
