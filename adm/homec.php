<?php
session_start();
include("../config/conn.php");
if(@$_SESSION['status'] != "login") {
  echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='index.php';</script>";
}
$sql = mysqli_query($db, "SELECT * FROM tb_about WHERE id_about = '1'");
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
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">

      <h2>Quotes</h2><br>
      <p>
        <form action="proc/proc-edit-about.php" method="post" enctype="multipart/form-data">
          <div style="overflow-x:auto;">
            <table cellpadding="5">
              <tr>
                <td>
                  <textarea cols="60" rows="4" name="txtdescription"><?php echo $data['description']; ?></textarea>
                </td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><br><input class="btn btn--primary btn--sm" type="submit" name="submit" value="Simpan"></td>
              </tr>
            </table>
          </div>
        </form>
      </p>

      <div style="width:100%; height:1px; background:#ddd; margin:20px 0px"></div>

      <h2>Keunggulan</h2><br>
      <p>
        <form action="proc/proc-edit-about.php" method="post" enctype="multipart/form-data">
          <div style="overflow-x:auto;">
            <table cellpadding="5">
              <tr>
                <td>
                  <table cellpadding="5">
                    <tr>
                      <td>1. </td>
                      <td><input type="text" name="txtk1"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <textarea cols="50" rows="4" name="txtdescription"><?php echo $data['description']; ?></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2. </td>
                      <td><input type="text" name="txtk2"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <textarea cols="50" rows="4" name="txtdescription"><?php echo $data['description']; ?></textarea>
                      </td>
                    </tr>
                  </table>
                </td>
                <td>
                  <table cellpadding="5">
                    <tr>
                      <td>3. </td>
                      <td><input type="text" name="txtk1"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <textarea cols="50" rows="4" name="txtdescription"><?php echo $data['description']; ?></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td>4. </td>
                      <td><input type="text" name="txtk2"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <textarea cols="50" rows="4" name="txtdescription"><?php echo $data['description']; ?></textarea>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td><br><input class="btn btn--primary btn--sm" type="submit" name="submit" value="Simpan"></td>
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
