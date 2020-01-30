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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-lite.min.js"></script>

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

      <h2>About the Company</h2><br>
      <p>
        <form action="proc/proc-edit-about.php" method="post" enctype="multipart/form-data">
          <div style="overflow-x:auto;">
            <table cellpadding="5">
              <tr>
                <td>Image&nbsp;<span class="small-text">(Ukuran : 1280 x 600 / 600 x 281)</span></td>
              </tr>
              <tr>
                <td>
                  <img src="../images/about/<?php echo $data['image']; ?>" width="300"><br>
                  <input type="file" name="file">
                  <input type="hidden" name="idabout" value="<?php echo $data['id_about']; ?>">
                </td>
              </tr>
              <tr>
                <td>Title</td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="txttitle" value="<?php echo $data['title']; ?>" required>
                </td>
              </tr>
              <tr>
                <td>Description</td>
              </tr>
              <tr>
                <td>
                  <textarea id="summernote" name="txtdescription"><?php echo $data['description']; ?></textarea>
                  <script>
                  $('#summernote').summernote({
                    tabsize: 2,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                    height: 180,
                    toolbar: [
                      ['style', ['style']],
                      ['font', ['bold', 'italic', 'underline', 'clear']],
                      ['fontname', ['fontname']],
                      ['color', ['color']],
                      ['para', ['ul', 'ol', 'paragraph']],
                      ['table', ['table']],
                      ['insert', ['link', 'picture', 'video']],
                      ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                  });
                  </script>
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

    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
