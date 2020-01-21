<?php
    // Include DB connection file
include("../../config/conn.php");

    // Get the form value
$idnews = $_POST['idnews'];
$txttitle = $_POST["txttitle"];
$txtauthor = $_POST["txtauthor"];
$txtdate = $_POST["txtdate"];
$txtdescription = $_POST["txtdescription"];
$status = $_POST['status'];

if (isset($_POST["submit"])) {
    $code_img = $_FILES["file"]["error"];
    if ($code_img === 0) {
        $error = "";
        $nama_folder = "../../images/news";
        $image_tmp = $_FILES["file"]["tmp_name"];
        $image_name = $_FILES["file"]["name"];
        $image_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
        $newfilename= date('dmYHis').'.'.$image_ext;
        $path_image = "$nama_folder/$newfilename";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");


        if (file_exists($path_image)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../news.php?error=$error");
            die();
        }

        if (move_uploaded_file($image_tmp, $path_image)) {
            $querydetail = "UPDATE tb_news SET image = '$newfilename', title = '$txttitle', author = '$txtauthor', date = '$txtdate', status = '$status', description = '$txtdescription' WHERE id_news = '$idnews'";
            mysqli_query($db, $querydetail);
            header("Location: ../news.php");
        }

    } else {
        // $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        $querydetail = "UPDATE tb_news SET title = '$txttitle', author = '$txtauthor', date = '$txtdate', status = '$status', description = '$txtdescription' WHERE id_news = '$idnews'";
        mysqli_query($db, $querydetail);
        // header("Location: ../slider.php?error=$error");
        header("Location: ../news.php");
        die();
    }
}
    // close mysql connection
mysqli_close($db);

?>
