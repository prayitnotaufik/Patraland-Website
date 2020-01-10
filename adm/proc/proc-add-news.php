<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$txttitle = $_POST["txttitle"];
$txtauthor = $_POST["txtauthor"];
$txtdate = $_POST["txtdate"];
$txtdescription = $_POST["txtdescription"];
$status = $_POST["status"];


if (isset($_POST["submit"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../images/news";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["file"]["name"]));
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../add-news.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "INSERT INTO tb_news (image, title, author, date, status, description) VALUES ('$newfilename','$txttitle','$txtauthor','$txtdate','$status','$txtdescription')";
            mysqli_query($db, $querydetail);
            header("Location: ../news.php");
        }

    } else {
        $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        header("Location: ../add-news.php?error=$error");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
