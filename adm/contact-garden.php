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
  .tooltip {
    position: relative;
    display: inline-block;
    font-size:10px;
  }

  .tooltip .tooltiptext {
    visibility: hidden;
    background-color: #000000c9;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;

    /* Position the tooltip */
    position: absolute;
    top: 100%;
    left: 50%;
    width:170px;
    margin-left: -60px;
    transition:0.3s;
    opacity:0;
  }

  .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity:1;
  }
</style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">
      <?php
      $sqlslct = "SELECT * FROM tb_contact WHERE id_contact = '1'";
      $sqlect1 = mysqli_query($db, $sqlslct);
      $data = mysqli_fetch_assoc($sqlect1);
      ?>

      <h2>Contact Garden</h2><br>
      <p>
        <form action="" method="post">
          <div style="overflow-x:auto;">
            <table cellpadding="5" width="100%">
              <tr>
                <td width="80"><img src="../garden-residence/images/icon/instagram.png" alt="" width="50"></td>
                <td><input type="text" name="txtig" placeholder="Instagram"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/facebook.png" alt="" width="50"></td>
                <td><input type="text" name="txtfb" placeholder="Facebook"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/whatsapp.png" alt="" width="50"></td>
                <td><input type="text" name="txtwa" placeholder="Whatsapp"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/email.png" alt="" width="50"></td>
                <td><input type="text" name="txtemail" placeholder="Email"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/telepon.png" alt="" width="50"></td>
                <td><input type="text" name="txttelp" placeholder="Telepon"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/lokasi.png" alt="" width="50"></td>
                <td><input type="text" name="txtlokasi" placeholder="Lokasi"></td>
              </tr>
              <tr>
                <td valign="top" colspan="3">
                  Maps<br>
                  <textarea name="txtmaps" cols="40"></textarea><br><br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.812086876858!2d112.61239785820861!3d-7.914688740579999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881fc7bf3a3b9%3A0xcad5da6cf7d0fcaa!2sPatra%20Garden%2C%20Kedawung%2C%20Ngijo%2C%20Kec.%20Karang%20Ploso%2C%20Malang%2C%20Jawa%20Timur%2065152!5e0!3m2!1sen!2sid!4v1579590118093!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </td>
              </tr>
            </table>

            <!-- <table cellpadding="5">
            <tr>
            <td>Lokasi</td>
          </tr>
          <tr>
          <td><textarea name="txtlokasi" cols="30" required><?php echo $data['lokasi']; ?></textarea></td>
        </tr>
        <tr>
        <td>Email</td>
      </tr>
      <tr>
      <td><input type="email" name="txtemail" placeholder="example@domain.com" value="<?php echo $data['email']; ?>" required></td>
    </tr>
    <tr>
    <td>Telepon</td>
  </tr>
  <tr>
  <td><input type="text" name="txttelp" value="<?php echo $data['telp']; ?>" required></td>
</tr>
<tr>
<td>Google Maps
<div class="tooltip"><sup><img src="../images/help.png" width="18"></sup>
<span class="tooltiptext"><a href="https://www.google.com/maps" target="_blank">Maps</a> > Cari Alamat > Klik menu ≡ > Bagikan atau Sematkan Peta > Pilih Sematkan Peta > Salin Link<br></br><span style="font-style:italic; color:#F00;">-- Tidak Support Mobile --</span></span>
</div>
</td>
</tr>
<tr>
<td><textarea name="txtgmaps" cols="50" rows="5" required><?php echo $data['maps']; ?></textarea></td>
</tr>
<tr>
<td><?php echo $data['maps']; ?></td>
</tr>
<tr>
<td><br><input class="btn btn--primary btn--sm" type="submit" name="submit" value="Simpan"></td>
</tr>
</table> -->
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

<?php
if(isset($_POST["submit"])) {
  $lokasi = $_POST['txtlokasi'];
  $email = $_POST['txtemail'];
  $telepon = $_POST['txttelp'];
  $gmaps = $_POST['txtgmaps'];
  $sql = "UPDATE tb_contact SET lokasi = '$lokasi', email = '$email', telp = '$telepon', maps = '$gmaps' WHERE id_contact = '1'";
  $exec = mysqli_query($db,$sql);
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Data berhasil disimpan!');
  window.location.href='contact.php';
  </script>");
}
?>
