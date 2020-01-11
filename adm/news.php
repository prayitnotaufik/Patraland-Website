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


      <h2>News</h2></h2><br>
      <p>
        <table cellpadding="5" width="100%" border=1>
          <tr style="background:#ddd; font-weight:bolder;">
            <th align="left">Title</th>
            <th align="left">Author</th>
            <th align="left">Date</th>
            <th align="left">Status</th>
            <th colspan="2"></th>
          </tr>
          <?php
          $no = 1;
          $sql = "SELECT * FROM tb_news";
          $hasil = mysqli_query($db,$sql);
          while($data = mysqli_fetch_assoc($hasil)) {
            ?>
            <tr>
              <td><?php echo $data['title']; ?></td>
              <td><?php echo $data['author']; ?></td>
              <td><?php echo $data['date']; ?></td>
              <td><?php echo $data['status']; ?></td>
              <td align="center"><br><a class="btn btn--primary btn--sm" style="background:#28a745;" href="edit-news.php?id=<?php echo $data['id_news']; ?>&act=edit">Edit</a><br><br></td>
              <td align="center"><br><a class="btn btn--accent btn--sm" href="?id=<?php echo $data['id_news']; ?>&act=del">Hapus</a><br><br></td>
            </tr>
          <?php } ?>
        </table>
      </form>
    </p>
    <?php
    if(@$_GET['act']=='del') {
      $id = $_GET['id'];
      $sqldel = "DELETE FROM tb_news WHERE id_news = '$id'";
      $result = mysqli_query($db,$sqldel);
      echo "<script type='text/javascript'>alert('Hapus data berhasil!');window.location.href='news.php';</script>";
    }
    ?>
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
