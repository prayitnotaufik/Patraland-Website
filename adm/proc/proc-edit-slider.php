<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$txttitle = $_POST["txttitle"];
$txtcaption = $_POST["txtcaption"];
$id_slider = $_POST["id_slider"];

if (isset($_POST["edit"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../images/slider";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["file"]["name"]));
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../slider.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_slider SET image = '$newfilename', title = '$txttitle', caption = '$txtcaption' WHERE id_slider = '$id_slider'";
            mysqli_query($db, $querydetail);
            header("Location: ../slider.php");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        $querydetail = "UPDATE tb_slider SET title = '$txttitle', caption = '$txtcaption' WHERE id_slider = '$id_slider'";
        mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../slider.php");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
