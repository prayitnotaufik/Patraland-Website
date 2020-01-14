<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$idteam = $_POST['idteam'];
$txtname = $_POST["txtname"];
$txtposition = $_POST["txtposition"];
$txtwa = $_POST["txtwa"];
$txtig = $_POST["txtig"];
$txtfb = $_POST["txtfb"];
$txttw = $_POST["txttw"];

if (isset($_POST["edit"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../images/team";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["file"]["name"]));
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../mot.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_team SET photo = '$newfilename', name = '$txtname', position = '$txtposition', whatsapp = '$txtwa', instagram = '$txtig', facebook = '$txtfb', twitter = '$txttw' WHERE id_team = '$idteam'";
            mysqli_query($db, $querydetail);
            header("Location: ../mot.php");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        $querydetail = "UPDATE tb_team SET name = '$txtname', position = '$txtposition', whatsapp = '$txtwa', instagram = '$txtig', facebook = '$txtfb', twitter = '$txttw' WHERE id_team = '$idteam'";
        mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../mot.php");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
