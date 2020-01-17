<?php
session_start();
include("../config/conn.php");
if (@$_SESSION['status'] != "login") {
  echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='index.php';</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/png" href="../images/icon2.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
  document.getElementsByTagName("html")[0].className += " js";
  </script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PT. Patraland - Administrator</title>
  <style>
  table {
    font-size:17px;
  }
  /* Full-width input fields */
  input[type=text], input[type=file], input[type=number], textarea, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 10; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }
    .cancelbtn {
      width: 100%;
    }
  }

  .pagination ul {
    display: inline-block;
  }

  .pagination li {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    font-size:12px;
    border: 1px solid #ddd;
    margin:0px 5px;
  }

  .pagination a {
    text-decoration: none;
  }

  .pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
  }

  .pagination li:hover:not(.active) {background-color: #ddd;}
  </style>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">


      <h2>Gallery</h2><br>
      <?php
      if (@$_GET['act'] == 'edit') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tb_gallery WHERE id_gallery = '$id'";
        $hasil = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($hasil)
        ?>
        <form action="proc/proc-edit-gallery.php" method="post" enctype="multipart/form-data">
          <table cellpadding="5">
            <tr>
              <td>Image</td>
              <td>:</td>
              <td>
                <img src="../images/gallery/<?php echo $data['image']; ?>" width="200"><br>
                <input type="file" name="file">
                <input type="hidden" name="id_gallery" value="<?php echo $_GET['id']; ?>">
              </td>
            </tr>
            <tr>
              <td>Title</td>
              <td>:</td>
              <td>
                <select class="" name="category" id="selectkategori">
                  <option value="1">Kencana Residence</option>
                  <option value="2">Garden Residence</option>
                  <option value="3">The Island Cluster</option>
                  <option value="4">Griya Madani</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Title</td>
              <td>:</td>
              <td><input type="text" name="txttitle" value="<?php echo $data['title']; ?>"></td>
            </tr>
            <tr>
              <td>Caption</td>
              <td>:</td>
              <td><textarea name="txtcaption" cols="30"><?php echo $data['caption']; ?></textarea></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><br><input class="btn btn--primary btn--sm" type="submit" name="edit" value="Simpan"></td>
            </tr>
          </table>
        </form>
        <div style="width:100%; border-bottom:1px solid #aaa; margin:20px 0px;"></div>
        <?php
      } else {
        ?>
        <button class="btn btn--primary btn--sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto; position:absolute;">Tambah</button>

        <div id="id01" class="modal">

          <form class="modal-content animate" action="proc/proc-add-gallery.php" method="post" enctype="multipart/form-data">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
              <label for="image"><b>Image</b></label>
              <input type="file" name="file">

              <label for="category"><b>Category</b></label>
              <select class="" name="category" id="selectkategori">
                <option value="1">Kencana Residence</option>
                <option value="2">Garden Residence</option>
                <option value="3">The Island Cluster</option>
                <option value="4">Griya Madani</option>
              </select>

              <label for="title"><b>Title</b></label>
              <input type="text" name="txttitle">

              <label for="caption"><b>Caption</b></label>
              <textarea name="txtcaption" cols="28"></textarea>

              <button class="btn btn--primary btn--sm" type="submit" name="submit">Simpan</button>
            </div>
          </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
      <?php } ?>
      <p>
        <?php
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
          $pageno = 1;
        }
        $no = 1;
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM tb_gallery";
        $result = mysqli_query($db,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM tb_gallery LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($db,$sql);
        ?>
        <?php if($total_rows > $no_of_records_per_page) { ?>
          <div style="float:right;">
            <ul class="pagination">
              <a href="?pageno=1"><li>&laquo;</li></a>
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <span>Prev</span>
                </li>
              </a>
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <span>Next</span>
                </li>
              </a>
              <a href="?pageno=<?php echo $total_pages; ?>">
                <li>&raquo;</li>
              </a>
            </ul>
          </div><br></br>
        <?php } ?>
        <div style="overflow-x:auto;">
          <table cellpadding="5" width="100%" border=1>
            <tr style="background:#ddd; font-weight:bolder;">
              <th>No.</th>
              <th>Image</th>
              <th>Category</th>
              <th>Title</th>
              <th>Caption</th>
              <th colspan="2"></th>
            </tr>
            <?php
            while($data = mysqli_fetch_array($res_data)){
              // $no = 1;
              // $sql = "SELECT * FROM tb_gallery ";
              // $hasil = mysqli_query($db, $sql);
              // while ($data = mysqli_fetch_assoc($hasil)) {
              ?>
              <tr>
                <td align="center"><?php echo $no++; ?></td>
                <td align="center"><img src="../images/gallery/<?php echo $data['image']; ?>" width="120"></td>
                <td>
                  <?php
                  $category = "";
                  if ($data['category'] == 1) {
                    $category = "Kencana Residence";
                  } elseif ($data['category'] == 2) {
                    $category = "Garden Residence";
                  } elseif ($data['category'] == 3) {
                    $category = "The Island Cluster";
                  } elseif ($data['category'] == 4) {
                    $category = "Griya Madani";
                  }
                  echo $category;
                  ?>
                </td>
                <td><?php echo $data['title']; ?></td>
                <td><?php echo $data['caption']; ?></td>
                <td align="center"><br><a class="btn btn--primary btn--sm" style="background:#28a745;" href="?id=<?php echo $data['id_gallery']; ?>&act=edit">Edit</a><br><br></td>
                <td align="center"><br><a class="btn btn--accent btn--sm" href="?id=<?php echo $data['id_gallery']; ?>&act=del">Hapus</a><br><br></td>
              </tr>
            <?php } ?>
          </table>
        </div><br>
        <?php if($total_rows > $no_of_records_per_page) { ?>
          <div style="float:right;">
            <ul class="pagination">
              <a href="?pageno=1"><li>&laquo;</li></a>
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <span>Prev</span>
                </li>
              </a>
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <span>Next</span>
                </li>
              </a>
              <a href="?pageno=<?php echo $total_pages; ?>">
                <li>&raquo;</li>
              </a>
            </ul>
          </div><br></br>
        <?php } ?>
      </p>
      <?php
      if (@$_GET['act'] == 'del') {
        $id = $_GET['id'];
        $sqldel = "DELETE FROM tb_gallery WHERE id_gallery = '$id'";
        $result = mysqli_query($db, $sqldel);
        echo "<script type='text/javascript'>alert('Hapus data berhasil!');window.location.href='gallery.php';</script>";
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
