<?php
    // Include DB connection file
include("../../config/conn.php");
$type = $_POST['txttype'];
$cat = $_POST['txtcat'];

if (isset($_POST["submitTG"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../patra-garden/images/type";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $image_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
        $newfilename= date('dmYHis').'.'.$image_ext;
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../type-garden.php??tp=$type&cat=$cat&error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_type SET image = '$newfilename' WHERE type = '$type' AND category = '$cat'";
            mysqli_query($db, $querydetail);
            header("Location: ../type-garden.php?tp=$type&cat=$cat");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        // $querydetail = "UPDATE tb_banner SET category = 'Garden' WHERE id_banner = '$id_banner'";
        // mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../type-garden.php?tp=$type&cat=$cat");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
