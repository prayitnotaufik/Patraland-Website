<?php
session_start();
include("../config/conn.php");
if(@$_SESSION['status'] != "login") {
  echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='index.php';</script>";
}
$sql = mysqli_query($db, "SELECT * FROM tb_thumbnail WHERE id_thumbnail = '1'");
$data = mysqli_fetch_array($sql);
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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <style>
  input[type=text] {
    width:500px;
  }
  .cd-content-wrapper {
    font-size:17px;
  }
  area {
    display:block;
  }
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">

      <h2>Thumbnail - Garden Residence</h2><br>
      <p>
        <form action="proc/proc-edit-thumb.php" method="post" enctype="multipart/form-data">
          <div style="overflow-x:auto;">
            <table cellpadding="5">
              <tr>
                <td>Image</td>
              </tr>
              <tr>
                <td>
                  <img src="../patra-garden/images/thumbnail/<?php echo $data['image']; ?>" width="250"><br>
                  <input type="file" name="file">
                  <input type="hidden" name="idthumbnail" value="<?php echo $data['id_thumbnail']; ?>">
                </td>
              </tr>
              <tr>
                <td>Proyek Name</td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="txtprname" value="<?php echo $data['proyek_name']; ?>" required>
                </td>
              </tr>
              <tr>
                <td>Location</td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="txtlocation" value="<?php echo $data['location']; ?>" required>
                </td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><br><input class="btn btn--primary btn--sm" type="submit" name="submitBG" value="Simpan"></td>
              </tr>
            </table>
          </div>
        </form>
      </p>

    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
