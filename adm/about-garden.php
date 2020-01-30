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
  input[type=text] {
    width:400px;
  }
  .cd-content-wrapper {
    font-size:17px;
  }
  area {
    display:block;
  }
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
  .cd-content-wrapper img {
    border: 10px solid #ddd;
    width: 300px;
  }
  .small-text {
    font-size:12px;
    font-style:italic;
    color:red;
  }
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">
      <h2>About Garden</h2><br>
      <p>
        <form action="proc/proc-edit-about-garden.php" method="post" enctype="multipart/form-data">
          <div style="overflow-x:auto;">
            <table>
              <tr>
                <td>
                  <?php
                  $sql1 = mysqli_query($db, "SELECT * FROM tb_about_proyek WHERE category = 'Garden' AND content_id = '1'");
                  $data1 = mysqli_fetch_array($sql1);
                  ?>
                  <table cellpadding="5">
                    <tr>
                      <td>1. </td>
                      <td>
                        <img src="../garden-residence/images/about/<?php echo $data1['image']; ?>"><br>
                        <span class="small-text">(Ukuran : 800 x 533)</span><br>
                        <input type="file" name="file1">
                        <input type="hidden" name="content_id1" value="1">
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="text" name="txtab1" value="<?php echo $data1['title']; ?>"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><textarea cols="50" rows="4" name="txtdesc1"><?php echo $data1['description']; ?></textarea></td>
                    </tr>
                  </table>
                </td>
                <td>
                  <?php
                  $sql3 = mysqli_query($db, "SELECT * FROM tb_about_proyek WHERE category = 'Garden' AND content_id = '3'");
                  $data3 = mysqli_fetch_array($sql3);
                  ?>
                  <table cellpadding="5">
                    <tr>
                      <td>3. </td>
                      <td>
                        <img src="../garden-residence/images/about/<?php echo $data3['image']; ?>"><br>
                        <span class="small-text">(Ukuran : 800 x 533)</span><br>
                        <input type="file" name="file3">
                        <input type="hidden" name="content_id3" value="3">
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="text" name="txtab3" value="<?php echo $data3['title']; ?>"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><textarea cols="50" rows="4" name="txtdesc3"><?php echo $data3['description']; ?></textarea></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <?php
                  $sql2 = mysqli_query($db, "SELECT * FROM tb_about_proyek WHERE category = 'Garden' AND content_id = '2'");
                  $data2 = mysqli_fetch_array($sql2);
                  ?>
                  <table cellpadding="5">
                    <tr>
                      <td>2. </td>
                      <td>
                        <img src="../garden-residence/images/about/<?php echo $data2['image']; ?>"><br>
                        <span class="small-text">(Ukuran : 800 x 533)</span><br>
                        <input type="file" name="file2">
                        <input type="hidden" name="content_id2" value="2">
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="text" name="txtab2" value="<?php echo $data2['title']; ?>"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><textarea cols="50" rows="4" name="txtdesc2"><?php echo $data2['description']; ?></textarea></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input class="btn btn--primary btn--sm" type="submit" name="saveaboutG" value="Simpan"></td>
                    </tr>
                  </table>
                </td>
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
