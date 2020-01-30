<?php
    // Include DB connection file
include("../../config/conn.php");
$id_blok = $_POST['id_blok'];
$cat = $_POST['txtcat'];

if (isset($_POST["submitBlokG"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../garden-residence/images/blok";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $image_ext1 = explode('.',$_FILES['file']['name']);
        $image_ext = end($image_ext1);
        $newfilename= date('dmYHis').'.'.$image_ext;
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../blok-garden.php?tp=$id_blok&cat=$cat&error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_blok SET siteplan = '$newfilename' WHERE id_blok = '$id_blok' AND category = '$cat'";
            mysqli_query($db, $querydetail);
            header("Location: ../blok-garden.php?id=$id_blok&cat=$cat");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        // $querydetail = "UPDATE tb_banner SET category = 'Garden' WHERE id_banner = '$id_banner'";
        // mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../blok-garden.php?id=$id_blok&cat=$cat");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
