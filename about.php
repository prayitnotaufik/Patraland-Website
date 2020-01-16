<?php
include("config/conn.php");
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
  <?php
  $sql = mysqli_query($db, "SELECT * FROM tb_about WHERE id_about = '1'");
  $data = mysqli_fetch_array($sql);
  ?>
  <div class="about-bottom wthree-3">
    <div class="container">
      <h2 class="tittle">About</h2>
      <div class="agileinfo_about_bottom_grids">
        <div class="col-md-12 agileinfo_about_bottom_grid">
          <img src="images/about/<?php echo $data['image']; ?>" alt=" " class="img-responsive" style="width:600px; margin-left:20px; float:right">
          <h5><?php echo $data['title']; ?></h5>
          <p><?php echo $data['description']; ?></p>
        </div>
        <!-- <div class="col-md-6 agileinfo_about_bottom_grid">
        <img src="images/slide-5.jpg" alt=" " class="img-responsive">
      </div> -->
    </div>
  </div>
</div>
<!-- team -->
<div class="team agileinfo-3">
  <div class="container">
    <h3 class="tittle">Marketing Team</h3>
    <div class="w3l_team_grids">
      <?php
      $sql = "SELECT * FROM tb_team";
      $hasil = mysqli_query($db, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
        ?>
        <div class="col-md-3 w3l_team_grid col-custom">
          <div class="view view-second">
            <img src="images/team/<?php echo $data['photo']; ?>" alt=" " class="img-responsive" />
            <div class="mask"></div>
            <div class="content">
              <div class="w3l_social_icons w3l_social_icons1">
                <ul>
                  <?php
                  $wa = $data['whatsapp'];
                  $tw = $data['twitter'];
                  $ig = $data['instagram'];
                  $fb = $data['facebook'];
                  if($fb!=null) {
                    ?>
                    <li><a href="<?php echo $data['facebook']; ?>" class="facebook" target="_blank"></a></li>
                  <?php } else { ?>
                    <li><a href="#" class="facebook"></a></li>
                  <?php } ?>

                  <?php if($tw!=null) { ?>
                    <li><a href="https://www.twitter.com/<?php echo $data['twitter']; ?>" class="twitter" target="_blank"></a></li>
                  <?php } else { ?>
                    <li><a href="#" class="twitter"></a></li>
                  <?php } ?>

                  <?php if($ig!=null) { ?>
                    <li><a href="https://www.instagram.com/<?php echo $data['instagram']; ?>" class="instagram" target="_blank"></a></li>
                  <?php } else { ?>
                    <li><a href="#" class="instagram"></a></li>
                  <?php } ?>

                  <?php if($wa!=null) { ?>
                    <li><a href="https://api.whatsapp.com/send?phone=<?php echo $data['whatsapp']; ?>" class="whatsapp" target="_blank"></a></li>
                  <?php } else { ?>
                    <li><a href="#" class="whatsapp"></a></li>
                  <?php } ?>
                </ul>
              </div>
              <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Duis aute irure dolor i</p> -->
              <p><i><small>Social Media</small></i></p>
              <!-- <p><img class="" src="images/lgo.png" alt="" srcset="" style="width:100%; position:absolute;"></p> -->
            </div>
          </div>
          <h4><?php echo $data['name']; ?></h4>
          <p><?php echo $data['position']; ?></p>
        </div>
      <?php } ?>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //team -->

<!--/ w3l-1 -->
<!-- footer -->
<?php include("includes/footer.php"); ?>
<!-- footer -->
</body>
<!-- //Body -->

</html>
