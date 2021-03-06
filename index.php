<?php
include("config/conn.php");
$sql = "SELECT * FROM tb_slider";
$hasil = mysqli_query($db, $sql);
$sql1 = "SELECT * FROM tb_news WHERE status = 'Published' ORDER BY id_news DESC LIMIT 3";
$hasil1 = mysqli_query($db, $sql1);
$sql2 = "SELECT * FROM tb_home";
$hasil2 = mysqli_query($db, $sql2);
$data2 = mysqli_fetch_assoc($hasil2);
$sql3 = "SELECT * FROM tb_thumbnail ORDER BY RAND()";
$hasil3 = mysqli_query($db, $sql3);
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
  <meta name="description" content="Hunian berkelas dengan lokasi yang strategis di Malang!">
  <meta name="keywords" content="perumahan di batu malang murah, perumahan murah batu malang, perumahan murah di batu malang, perumahan baru murah di batu malang, perumahan murah di sekitar batu malang, info perumahan murah batu malang">
  <meta name="robots" content="index, follow">
  <meta name="copyright" content="PT Patraland Griya Madani Development">
  <meta name="author" content="PT Patraland Griya Madani Development">
  <meta name="creationdate" content="Januari 2020">
  <meta name="distribution" content="global">
  <meta name="rating" content="general">
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
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <!-- //Custom-Theme-Files -->
  <!-- Web-Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
  <!-- <link rel="stylesheet" href="css/card.css"> -->
  <!-- //Web-Fonts -->
  <!-- Default-JavaScript-File -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function() {
      $("#slider").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 1000,
        namespace: "callbacks",
        before: function() {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
          $('.events').append("<li>after event fired.</li>");
        }
      });
    });
  </script>
  <style>
    iframe {
      width: 100%;
      position: absolute;
      height: 311.717px;
      top: 0;
      left: 0;
    }

    .agileinfo {
      padding-bottom: 0;
    }

    .featured-section {
      padding: 3em 0;
    }
  </style>

</head>
<!-- //Head -->
<!-- Body -->

<body>
  <!-- Header -->
  <div class="header w3layouts-1">
    <!-- Top-Bar -->
    <?php include("includes/topbar.php"); ?>
    <!-- //Top-Bar -->
    <!-- Slider -->
    <div class="slider">
      <div class="callbacks_container">
        <ul class="rslides" id="slider">
          <?php
          while ($data = mysqli_fetch_assoc($hasil)) {
          ?>
            <li>
              <div class="slider-img">
                <img src="images/slider/<?php echo $data['image']; ?>" class="img-responsive">
              </div>
              <div class="slider-info w3ls-1">
                <h3><?php echo $data['title']; ?></h3>
                <div class="underline"></div>
                <p><?php echo $data['caption']; ?></p>
              </div>
            </li>
          <?php } ?>
        </ul>

      </div>
      <div class="clearfix"></div>
    </div>
    <!-- //Slider -->
  </div>
  <!-- //Header -->
  <!-- agileinfo -->
  <div class="agileinfo">
    <div class="container">
      <h3>
        <img src="images/star.png" style="width:50px;">
        <img src="images/star.png" style="width:50px;">
        <img src="images/star.png" style="width:50px;">
        <img src="images/star.png" style="width:50px;">
        <img src="images/star.png" style="width:50px;">
      </h3>
      <p class="ttt" style="border-bottom:1px solid #ddd; border-top:1px solid #ddd; padding:20px;"><i><span style="font-size:30px;">&ldquo;</span><?php echo $data2['quotes']; ?><span style="font-size:30px;">&rdquo;</span></i></p>
    </div>
  </div>
  <!-- agileinfo -->
  <div class="featured-section">
    <div class="container">
      <h3 class="tittle">Keunggulan</h3>
      <div class="featured-grids w3ls-2">
        <div class="row justify-content-md-center">
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <i><a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-ok"></a></i>
            </div>
            <h4><?php echo $data2['k1']; ?></h4>
            <p><?php echo $data2['desc1']; ?></p>
          </div>
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <a href="#" class="hi-icon hi-icon-support glyphicon glyphicon-ok"></a>
            </div>
            <h4><?php echo $data2['k2']; ?></h4>
            <p><?php echo $data2['desc2']; ?></p>
          </div>
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <a href="#" class="hi-icon hi-icon-support glyphicon glyphicon-ok"></a>
            </div>
            <h4><?php echo $data2['k3']; ?></h4>
            <p><?php echo $data2['desc3']; ?></p>
          </div>
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <a href="#" class="hi-icon hi-icon-support glyphicon glyphicon-ok"></a>
            </div>
            <h4><?php echo $data2['k4']; ?></h4>
            <p><?php echo $data2['desc4']; ?></p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- friend-agent -->
  <div class="friend-agent agileits-1">
    <div class="container">
      <h3 class="tittle">Latest News</h3>
      <div class="friend-grids">
        <?php while ($data1 = mysqli_fetch_assoc($hasil1)) { ?>
          <div class="col-md-4 friend-grid" style="min-height:470px;">
            <a href="news-detail.php?id=<?php echo $data1['id_news']; ?>"><img src="images/news/<?php echo $data1['image']; ?>" alt="" class="img-responsive" width="350" height="237"></a>
            <h4><a style="color:#EFA52C;" href="news-detail.php?id=<?php echo $data1['id_news']; ?>"><?php echo $data1['title']; ?></a></h4>
            <a href="news-detail.php?id=<?php echo $data1['id_news']; ?>">
              <p>
                <?php echo substr($data1['description'], 0, 170); ?>
                <?php
                $string = $data1['description'];
                if (strlen($string) > 170) {
                  echo "...";
                }
                ?>
              </p>
            </a>
            <div style="bottom:0; left:0; position:absolute; width:100%;">
              <a href="news-detail.php?id=<?php echo $data1['id_news']; ?>"><button class="btn btn-primary">Read More</button></a>
            </div>
          </div>
        <?php } ?>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- friend-agent -->
  <div class="services wthree-3">
    <div class="container">
      <h2 class="tittle">Our Project</h2>
      <div class="friend-grids">
        <div class="col-md-3 friend-grid shad">
          <div class="boxx">
            <a href="garden-residence">
              <img src="images/thumbnail/garden.jpg" alt="Project Thumbnail">
              <div class="pad">
                <b>Garden Residence</b>
                <p><i>Ngijo, Karangploso</i></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 friend-grid shad">
          <div class="boxx">
            <a href="kencana-residence">
              <img src="images/thumbnail/kencana.jpg" alt="Project Thumbnail">
              <div class="pad">
                <b>Kencana Residence</b>
                <p><i>Kepuharjo, Karangploso</i></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 friend-grid shad">
          <div class="boxx">
            <a href="island-cluster">
              <img src="images/thumbnail/island.jpg" alt="Project Thumbnail">
              <div class="pad">
                <b>The Island Cluster</b>
                <p><i>Tasikmadu, Lowokwaru</i></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 friend-grid shad">
          <div class="boxx">
            <a href="garden-residence">
              <img src="images/thumbnail/madani.jpg" alt="Project Thumbnail">
              <div class="pad">
                <b>Griya Madani</b>
                <p><i>Curungrejo, Kepanjen</i></p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- footer -->
  <?php include("includes/footer.php"); ?>
  <!-- footer -->
  <!--FlexSlider-->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider) {
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!--End-slider-script-->
  <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true // 100% fit in a container
      });
    });
  </script>
</body>
<!-- //Body -->

</html>