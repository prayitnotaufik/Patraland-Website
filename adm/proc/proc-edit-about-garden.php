<?php
// Include DB connection file
include("../../config/conn.php");

// Get the form value
$content_id1 = $_POST['content_id1'];
$txtab1 = $_POST["txtab1"];
$txtdesc1 = $_POST["txtdesc1"];
$content_id2 = $_POST['content_id2'];
$txtab2 = $_POST["txtab2"];
$txtdesc2 = $_POST["txtdesc2"];
$content_id3 = $_POST['content_id3'];
$txtab3 = $_POST["txtab3"];
$txtdesc3 = $_POST["txtdesc3"];

if (isset($_POST["saveaboutG"])) {
  $code_img1 = $_FILES["file1"]["error"];
  $code_img2 = $_FILES["file2"]["error"];
  $code_img3 = $_FILES["file3"]["error"];
  if ($code_img1 === 0 || $code_img2 === 0 || $code_img3 === 0) {
    $error = "";
    $nama_folder = "../../garden-residence/images/about";
    // Image 1
    $image_tmp1 = $_FILES["file1"]["tmp_name"];
    $image_name1 = $_FILES["file1"]["name"];
    $image_ext1 = strtolower(end(explode('.',$_FILES['file1']['name'])));
    $newfilename1 = date('dmYHis').'.'.$image_ext1;
    $path_image1 = "$nama_folder/$newfilename1";
    // Image 2
    $image_tmp2 = $_FILES["file2"]["tmp_name"];
    $image_name2 = $_FILES["file2"]["name"];
    $image_ext2 = strtolower(end(explode('.',$_FILES['file2']['name'])));
    $newfilename2 = date('dmYHis').'.'.$image_ext2;
    $path_image2 = "$nama_folder/$newfilename2";
    // Image 3
    $image_tmp3 = $_FILES["file3"]["tmp_name"];
    $image_name3 = $_FILES["file3"]["name"];
    $image_ext3 = strtolower(end(explode('.',$_FILES['file3']['name'])));
    $newfilename3 = date('dmYHis').'.'.$image_ext3;
    $path_image3 = "$nama_folder/$newfilename3";

    $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


    if (file_exists($path_image)) {
      $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
      header("Location: ../about-garden.php?error=$error");
      die();
    }

    if (move_uploaded_file($image_tmp1, $path_image1)) {
      $querydetail1 = "UPDATE tb_about_proyek SET image = '$newfilename1', title = '$txtab1', description = '$txtdesc1' WHERE category = 'Garden' AND content_id = '$content_id1'";
      mysqli_query($db, $querydetail1);
      header("Location: ../about-garden.php");
    } else if (move_uploaded_file($image_tmp2, $path_image2)) {
      $querydetail2 = "UPDATE tb_about_proyek SET image = '$newfilename2', title = '$txtab2', description = '$txtdesc2' WHERE category = 'Garden' AND content_id = '$content_id2'";
      mysqli_query($db, $querydetail2);
      header("Location: ../about-garden.php");
    } else if (move_uploaded_file($image_tmp3, $path_image3)) {
      $querydetail3 = "UPDATE tb_about_proyek SET image = '$newfilename3', title = '$txtab3', description = '$txtdesc3' WHERE category = 'Garden' AND content_id = '$content_id3'";
      mysqli_query($db, $querydetail3);
      header("Location: ../about-garden.php");
    }

  } else {
    // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
    $querydetail1 = "UPDATE tb_about_proyek SET title = '$txtab1', description = '$txtdesc1' WHERE category = 'Garden' AND content_id = '$content_id1'";
    mysqli_query($db, $querydetail1);
    $querydetail2 = "UPDATE tb_about_proyek SET title = '$txtab2', description = '$txtdesc2' WHERE category = 'Garden' AND content_id = '$content_id2'";
    mysqli_query($db, $querydetail2);
    $querydetail3 = "UPDATE tb_about_proyek SET title = '$txtab3', description = '$txtdesc3' WHERE category = 'Garden' AND content_id = '$content_id3'";
    mysqli_query($db, $querydetail3);
    // header("Location: ../slider.php?error=$error");
    header("Location: ../about-garden.php");
    die();
  }
}
// close mysql connection
mysqli_close($db);

?>
