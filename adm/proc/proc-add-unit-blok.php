<?php
// Include DB connection file
include("../../config/conn.php");

// Get the form value
$id_blok = $_POST['id_blok'];
$txtunit = $_POST["txtunit"];
$txttype = $_POST["txttype"];
$txtltb = $_POST["txtltb"];
$txtstatus = $_POST["txtstatus"];
$txtcat = $_POST["txtcat"];


if (isset($_POST["submitUnitBlokG"])) {
  $cek_unit = mysqli_num_rows(mysqli_query($db, "SELECT * FROM tb_unit_blok WHERE unit = '$txtunit' AND id_blok = '$id_blok'"));
  if($cek_unit > 0) {
    echo '<script language="javascript">
    alert ("Unit tidak boleh sama!");
    window.location="../blok-garden.php?id='.$id_blok.'&cat='.$txtcat.'";
    </script>';
  } else {
    $querydetail = "INSERT INTO tb_unit_blok (unit, type, lt_b, status, id_blok, category) VALUES ('$txtunit','$txttype','$txtltb','$txtstatus','$id_blok','$txtcat')";
    mysqli_query($db, $querydetail);
    header("Location: ../blok-garden.php?id=$id_blok&cat=$txtcat");
  }
}
// close mysql connection
mysqli_close($db);

?>
