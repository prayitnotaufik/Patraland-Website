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
  <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
  <style>
  table {
    font-size:17px;
  }
  /* Full-width input fields */
  input[type=text], input[type=file], textarea, select {
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

  .small {
    font-size:12px;
    font-style:italic;
    margin-top:-5px;
    color: red;
  }
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">


      <h2>Type</h2><br>
      <form action="" id="opttype" method="post">
        <select name="tphouse" id="tphouse">
          <option value="">Choose Type</option>
          <option value="?tp=36&cat=Garden">36</option>
          <option value="?tp=40&cat=Garden">40</option>
          <option value="?tp=45&cat=Garden">45</option>
          <option value="?tp=54&cat=Garden">54</option>
          <option value="?tp=48*&cat=Garden">48*</option>
          <option value="?tp=54*&cat=Garden">54*</option>
          <option value="?tp=70*&cat=Garden">70*</option>
        </select>
      </form>
      <script type="text/javascript">
      $(function(){
        // bind change event to select
        $('#tphouse').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
            window.location = url; // redirect
          }
          return false;
        });
      });
      </script>
      <div class="small">* 2 Lantai</div><br>

      <?php
      if(isset($_GET['tp'])) {
        ?>
        <button class="btn btn--primary btn--sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button>

        <div id="id01" class="modal">

          <form class="modal-content animate" action="proc/proc-edit-type.php" method="post" enctype="multipart/form-data">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
              <label for="image"><b>Image</b></label>
              <input type="file" name="file">
              <input type="hidden" name="txttype" value="<?php echo $_GET['tp']; ?>">
              <input type="hidden" name="txtcat" value="<?php echo $_GET['cat']; ?>">

              <button class="btn btn--primary btn--sm" type="submit" name="submitTG">Simpan</button>
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
        <p>
          <?php
          $type = @$_GET['tp'];
          $cat = @$_GET['cat'];
          $sql = mysqli_query($db, "SELECT * FROM tb_type WHERE type = '$type' AND category = '$cat'");
          $data = mysqli_fetch_assoc($sql);
          ?>
          <img src="../patra-garden/images/type/<?php echo $data['image']; ?>" width="385">
        </p>
      <?php } ?>
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
