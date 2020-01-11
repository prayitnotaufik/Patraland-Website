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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-lite.min.js"></script>

  <style>
  input[type=text] {
    width:500px;
    padding:5px;
  }
  .cd-content-wrapper {
    font-size:17px;
  }
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">
      <?php
      $idnews = $_GET['id'];
      $sqlslct = "SELECT * FROM tb_news WHERE id_news = '$idnews'";
      $sqlect1 = mysqli_query($db, $sqlslct);
      $data = mysqli_fetch_assoc($sqlect1);
      ?>

      <h2>Edit News</h2><br>
      <p>
        <form action="proc/proc-edit-news.php" method="post" enctype="multipart/form-data">
          <table cellpadding="5">
            <tr>
              <td>Image</td>
            </tr>
            <tr>
              <td>
                <img src="../images/news/<?php echo $data['image']; ?>" width="200"><br>
                <input type="file" name="file">
              </td>
            </tr>
            <tr>
              <td>Title</td>
            </tr>
            <tr>
              <td>
                <input type="text" name="txttitle" value="<?php echo $data['title']; ?>">
                <input type="hidden" name="txtauthor" value="<?php echo $data['author']; ?>">
                <input type="hidden" name="txtdate" value="<?php echo $data['date']; ?>">
                <input type="hidden" name="idnews" value="<?php echo $_GET['id']; ?>">
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
            <?php if($data['status']=="Published") { ?>
            <tr>
              <td>Status : <input type="radio" name="status" value="Draft"> Draft&nbsp;
              <input type="radio" name="status" value="Published" checked> Publish</td>
            </tr>
          <?php } else { ?>
            <tr>
              <td>Status : <input type="radio" name="status" value="Draft" checked> Draft&nbsp;
              <input type="radio" name="status" value="Published"> Publish</td>
            </tr>
          <?php } ?>
            <tr>
              <td><br><input class="btn btn--primary btn--sm" type="submit" name="submit" value="Simpan"></td>
            </tr>
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