<?php
session_start();
include("../config/conn.php");
if(@$_SESSION['status'] != "login") {
  echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='index.php';</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/png" href="../images/icon2.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PT. Patraland - Administrator</title>
  <style>
  table {
    font-size:17px;
  }
  .pagination ul {
    display: inline-block;
  }

  .pagination li {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    font-size:12px;
    border: 1px solid #ddd;
    margin:0px 5px;
  }

  .pagination a {
    text-decoration: none;
  }

  .pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
  }

  .pagination li:hover:not(.active) {background-color: #ddd;}
  </style>
</head>
<body>
  <?php include("includes/header.php"); ?><!-- .cd-main-header -->
  <main class="cd-main-content">
    <?php include("includes/navbar.php"); ?>
    <div class="cd-content-wrapper">


      <h2>Contact Messages</h2></h2><br>
      <p>
        <?php
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
          $pageno = 1;
        }
        $no = 1;
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM tb_message";
        $result = mysqli_query($db,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM tb_message LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($db,$sql);
        ?>
        <?php if($total_rows > $no_of_records_per_page) { ?>
          <div style="float:right;">
            <ul class="pagination">
              <a href="?pageno=1"><li>&laquo;</li></a>
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <span>Prev</span>
                </li>
              </a>
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <span>Next</span>
                </li>
              </a>
              <a href="?pageno=<?php echo $total_pages; ?>">
                <li>&raquo;</li>
              </a>
            </ul>
          </div><br></br>
        <?php } ?>
        <div style="overflow-x:auto;">
          <table cellpadding="5" width="100%" border="1">
            <tr style="background:#ddd; font-weight:bolder;">
              <th>Name</th>
              <th>Email</th>
              <th>Website</th>
              <th>Message</th>
              <th colspan="2"></th>
            </tr>
            <?php
            $no = 1;
            while($data = mysqli_fetch_array($res_data)) {
              ?>
              <tr>
                <td><?php echo $data['name']; ?></td>
                <td><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td>
                <td><?php echo $data['website']; ?></td>
                <td><?php echo $data['message']; ?></td>
                <td align="center"><br><a class="btn btn--accent btn--sm" href="?id=<?php echo $data['id_message']; ?>&act=del">Hapus</a><br><br></td>
              </tr>
            <?php } ?>
          </table>
        </div><br>
        <?php if($total_rows > $no_of_records_per_page) { ?>
          <div style="float:right;">
            <ul class="pagination">
              <a href="?pageno=1"><li>&laquo;</li></a>
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <span>Prev</span>
                </li>
              </a>
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <span>Next</span>
                </li>
              </a>
              <a href="?pageno=<?php echo $total_pages; ?>">
                <li>&raquo;</li>
              </a>
            </ul>
          </div><br></br>
        <?php } ?>
      </p>
      <?php
      if(@$_GET['act']=='del') {
        $id = $_GET['id'];
        $sqldel = "DELETE FROM tb_message WHERE id_message = '$id'";
        $result = mysqli_query($db,$sqldel);
        echo "<script type='text/javascript'>alert('Hapus data berhasil!');window.location.href='msg.php';</script>";
      }
      ?>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
