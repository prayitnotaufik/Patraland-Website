<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$idthumbnail = $_POST['idthumbnail'];
$txtprname = $_POST["txtprname"];
$txtlocation = $_POST["txtlocation"];

if (isset($_POST["submitBG"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../patra-garden/images/thumbnail";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $image_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
        $newfilename= date('dmYHis').'.'.$image_ext;
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../thumb.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_thumbnail SET image = '$newfilename', proyek_name = '$txtprname', location = '$txtlocation' WHERE id_thumbnail = '$idthumbnail'";
            mysqli_query($db, $querydetail);
            header("Location: ../thumb.php");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        $querydetail = "UPDATE tb_thumbnail SET proyek_name = '$txtprname', location = '$txtlocation' WHERE id_thumbnail = '$idthumbnail'";
        mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../thumb.php");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
