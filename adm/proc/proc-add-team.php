<?php
// Include DB connection file
include("../../config/conn.php");

// Get the form value
$txtname = $_POST["txtname"];
$txtposition = $_POST["txtposition"];
$txtwa = $_POST["txtwa"];
$txtig = $_POST["txtig"];
$txtfb = $_POST["txtfb"];
$txttw = $_POST["txttw"];

if (isset($_POST["submit"])) {
  $code_img = $_FILES["file"]["error"];
  if ($code_img === 0) {
    $error = "";
    $nama_folder = "../../images/team";
    $image_tmp = $_FILES["file"]["tmp_name"];
    $image_name = $_FILES["file"]["name"];
    $image_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
    $newfilename= date('dmYHis').'.'.$image_ext;
    $path_image = "$nama_folder/$newfilename";
    $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


    if (file_exists($path_image)) {
      $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
      header("Location: ../mot.php?error=$error");
      die();
    }

    if (move_uploaded_file($image_tmp, $path_image)) {
      $querydetail = "INSERT INTO tb_team (photo, name, position, whatsapp, instagram, facebook, twitter) VALUES ('$newfilename','$txtname','$txtposition','$txtwa','$txtig','$txtfb','$txttw')";
      mysqli_query($db, $querydetail);
      header("Location: ../mot.php");
    }

  } else {
    $querydetail = "INSERT INTO tb_team (name, position, whatsapp, instagram, facebook, twitter) VALUES ('$txtname','$txtposition','$txtwa','$txtig','$txtfb','$txttw')";
    mysqli_query($db, $querydetail);
    header("Location: ../mot.php?error=$error");
    die();
  }
}
// close mysql connection
mysqli_close($db);

?>
