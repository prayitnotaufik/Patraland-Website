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
  <style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 10; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 27%;
  text-align: center;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">


        <h2>Slider</h2><br>
        <a class="btn btn--primary btn--sm" id="myBtn">Tambah</a><br><br>

        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <center>
            <form action="proc/proc-slider.php" method="post" enctype="multipart/form-data">
              <table cellpadding="5">
                <tr>
                  <td>Image :</td>
                </tr>
                <tr>
                  <td><input type="file" name="file"></td>
                </tr>
                <tr>
                  <td>Title :</td>
                </tr>
                <tr>
                  <td><input type="text" name="txttitle"><hr></td>
                </tr>
                <tr>
                  <td>Caption :</td>
                </tr>
                <tr>
                  <td><textarea name="txtcaption" cols="28"></textarea></td>
                </tr>
                <tr>
                  <td><input type="submit" class="btn btn--primary btn--sm" style="width:100%;" name="submit" value="Simpan"></td>
                </tr>
              </table>
            </form>
            </center>
          </div>

        </div>

        <p>
            <table cellpadding="5" width="100%" border=1>
              <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Caption</th>
              </tr>
              <?php
                $no = 1;
                $sql = "SELECT * FROM tb_slider";
                $hasil = mysqli_query($db,$sql);
                while($data = mysqli_fetch_assoc($hasil)) {
              ?>
                <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><img src="../images/slider/<?php echo $data['image']; ?>" width="120"></td>
                  <td><?php echo $data['title']; ?></td>
                  <td><?php echo $data['caption']; ?></td>
                </tr>
              <?php } ?>
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

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>