<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$txttitle = $_POST["txttitle"];
$txtcaption = $_POST["txtcaption"];

if (isset($_POST["submit"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../images/slider";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $image_ext1 = explode('.',$_FILES['file']['name']);
        $image_ext = end($image_ext1);
        $newfilename= date('dmYHis').'.'.$image_ext;
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../slider.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "INSERT INTO tb_slider (image, title, caption) VALUES ('$newfilename','$txttitle','$txtcaption')";
            mysqli_query($db, $querydetail);
            header("Location: ../slider.php");
        }

    } else {
        $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        header("Location: ../slider.php?error=$error");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
