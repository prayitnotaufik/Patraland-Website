<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$idabout = $_POST['idabout'];
$txttitle = $_POST["txttitle"];
$txtdescription = $_POST["txtdescription"];

if (isset($_POST["submit"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../images/about";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["file"]["name"]));
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../about.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_about SET image = '$newfilename', title = '$txttitle', description = '$txtdescription' WHERE id_about = '$idabout'";
            mysqli_query($db, $querydetail);
            header("Location: ../about.php");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        $querydetail = "UPDATE tb_about SET title = '$txttitle', description = '$txtdescription' WHERE id_about = '$idabout'";
        mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../about.php");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
