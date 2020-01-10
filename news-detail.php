<?php
include("config/conn.php");
$idnews = $_GET['id'];
$sql = "SELECT * FROM tb_news WHERE id_news = '$idnews'";
$result = mysqli_query($db,$sql);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<!-- Head -->

<head>
  <title>PT. Patraland Griya Madani</title>
  <link rel="shortcut icon" type="image/png" href="images/icon2.png">
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Premier Realty a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
  <script type="application/x-javascript">
  addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
  </script>
  <!-- //Meta-Tags -->
  <!-- Custom-Theme-Files -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/about.css" type="text/css" media="all">
  <!-- //Custom-Theme-Files -->
  <!-- Web-Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
  <!-- //Web-Fonts -->
  <!-- Default-JavaScript-File -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
  .bts {
    clear:both;
    margin:20px 0px;
    border-bottom:1px solid #ddd;
  }
  </style>
</head>
<!-- //Head -->
<!-- Body -->

<body>
  <!-- Header -->
  <div class="header">
    <!-- Top-Bar -->
    <?php include("includes/topbar.php"); ?>
    <!-- //Top-Bar -->
    <div class="banner">
      <div class="bann-info">
      </div>
    </div>
    <!-- //Slider -->
  </div>
  <!-- //Header -->
  <div class="about-bottom wthree-3">
    <div class="container">
        <div class="agileinfo_about_bottom_grids">
          <div class="col-md-12 agileinfo_about_bottom_grid">
            <img src="images/news/<?php echo $data['image']; ?>" alt=" " class="img-responsive" style="width:50%; margin-bottom:20px; border:10px solid #ddd;">
            <h5><b><a href="" style="color:black;"><?php echo $data['title']; ?></a></b></h5>
            <div style="position:inherit"><small><i>(Posted by <u style="text-transform:capitalize;"><?php echo $data['author']; ?></u> - <?php echo $data['date']; ?>)</i></small></div>
            <p><?php echo $data['description']; ?></p>
          </div>
        </div>
        <div class="bts">&nbsp;</div>
        <div style="position:absolute; margin-left:15px;">
          <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fpatraland.blogspot.com%2F&layout=button_count&size=small&width=101&height=20&appId" width="101" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
  </div>

  <!--/ w3l-1 -->
  <!-- footer -->
  <?php include("includes/footer.php"); ?>
  <!-- footer -->
</body>
<!-- //Body -->

</html>
