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
  iframe {
    width:100%;
    height:200px;
  }
</style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">
      <?php
      $sqlslct = "SELECT * FROM tb_contact_proyek WHERE category = 'Garden'";
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
                <td><input type="text" name="txtig" placeholder="Instagram" value="<?php echo $data['instagram']; ?>"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/facebook.png" alt="" width="50"></td>
                <td><input type="text" name="txtfb" placeholder="Facebook" value="<?php echo $data['facebook']; ?>"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/whatsapp.png" alt="" width="50"></td>
                <td><input type="text" name="txtwa" placeholder="Whatsapp" value="<?php echo $data['whatsapp']; ?>"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/email.png" alt="" width="50"></td>
                <td><input type="text" name="txtemail" placeholder="Email" value="<?php echo $data['email']; ?>"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/telepon.png" alt="" width="50"></td>
                <td><input type="text" name="txttelp" placeholder="Telepon" value="<?php echo $data['telephone']; ?>"></td>
              </tr>
              <tr>
                <td><img src="../garden-residence/images/icon/lokasi.png" alt="" width="50"></td>
                <td><input type="text" name="txtlokasi" placeholder="Lokasi" value="<?php echo $data['location']; ?>"></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div style="border:1px dotted #ddd;"></div></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" colspan="3">
                  Maps<div class="tooltip"><sup><img src="../images/help.png" width="18"></sup>
                    <span class="tooltiptext"><a href="https://www.google.com/maps" target="_blank">Maps</a> > Cari Alamat > Klik menu ≡ > Bagikan atau Sematkan Peta > Pilih Sematkan Peta > Salin Link<br></br><span style="font-style:italic; color:#F00;">-- Tidak Support Mobile --</span></span>
                  </div><br>
                  <textarea name="txtmaps" rows="4" style="width:100%;"><?php echo $data['maps']; ?></textarea><br><br>
                  <?php echo $data['maps']; ?></iframe>
                </td>
              </tr>
              <tr>
                <td><input class="btn btn--primary btn--sm" type="submit" name="submit" value="Simpan"></td>
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

<?php
if(isset($_POST["submit"])) {
  $ig = $_POST['txtig'];
  $fb = $_POST['txtfb'];
  $wa = $_POST['txtwa'];
  $email = $_POST['txtemail'];
  $telp = $_POST['txttelp'];
  $lokasi = $_POST['txtlokasi'];
  $maps = $_POST['txtmaps'];
  $sql = "UPDATE tb_contact_proyek SET instagram = '$ig', facebook = '$fb', whatsapp = '$wa', email = '$email', telephone = '$telp', location = '$lokasi', maps = '$maps' WHERE id_contact_proyek = '1' AND category = 'Garden'";
  $exec = mysqli_query($db,$sql);
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Data berhasil disimpan!');
  window.location.href='contact-garden.php';
  </script>");
}
?>
