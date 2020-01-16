<?php
include("config/conn.php");
$sql = "SELECT * FROM tb_slider";
$hasil = mysqli_query($db,$sql);
$sql1 = "SELECT * FROM tb_news WHERE status = 'Published' ORDER BY id_news DESC LIMIT 3";
$hasil1 = mysqli_query($db,$sql1);
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
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //Meta-Tags -->
  <!-- Custom-Theme-Files -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <!-- //Custom-Theme-Files -->
  <!-- Web-Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
  <!-- //Web-Fonts -->
  <!-- Default-JavaScript-File -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script>
  $(function () {
    $("#slider").responsiveSlides({
      auto: true,
      pager: true,
      nav: true,
      speed: 1000,
      namespace: "callbacks",
      before: function () {
        $('.events').append("<li>before event fired.</li>");
      },
      after: function () {
        $('.events').append("<li>after event fired.</li>");
      }
    });
  });
  </script>


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
          while($data = mysqli_fetch_assoc($hasil)) {
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
      <h3>Welcome</h3>
      <p class="ttt">when an unknown printer took a galley of type and scrambled Lorem Ipsum passages, and more recently it to make a type specimen book.</p>
      <div class="flexslider-info">
        <div class="banner-info">
          <div class="col-md-7 agileinfo-left">
            <iframe width="100%" height="311.717" src="https://www.youtube.com/embed/6wfc0SZodCQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-5 agileinfo-grid grid-one">
            <h4>Temporibus autem</h4>
            <p>Libero tempore, cum soluta nobis est eligendi
              optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus  ut
              et voluptates repudiandae sint et molestiae non recusandae</p>

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- agileinfo -->
    <!-- friend-agent -->
    <div class="friend-agent agileits-1">
      <div class="container">
        <h3 class="tittle">Latest News</h3>
        <div class="friend-grids">
          <?php while($data1 = mysqli_fetch_assoc($hasil1)) { ?>
            <div class="col-md-4 friend-grid" style="min-height:470px;">
              <a href="news-detail.php?id=<?php echo $data1['id_news']; ?>"><img src="images/news/<?php echo $data1['image']; ?>" alt="" class="img-responsive" width="350" height="237" ></a>
              <h4><a style="color:#EFA52C;" href="news-detail.php?id=<?php echo $data1['id_news']; ?>"><?php echo $data1['title']; ?></a></h4>
              <a href="news-detail.php?id=<?php echo $data1['id_news']; ?>">
                <p>
                  <?php echo substr($data1['description'], 0, 170); ?>
                  <?php
                  $string = $data1['description'];
                  if(strlen($string) > 170) {
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
    <div class="featured-section">
      <div class="container">
        <h3 class="tittle">Keunggulan</h3>
        <div class="featured-grids w3ls-2">
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <i><a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-usd"></a></i>
            </div>
            <h4>Siap Bangun</h4>
            <p>Kami siap membangun rumah sesaat setelah pembelian sudah berlangsung</p>
          </div>
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <a href="#" class="hi-icon hi-icon-support glyphicon glyphicon-tag"></a>
            </div>
            <h4>Diskon Puluhan Juta</h4>
            <p>Dapatkan potongan harga spesial selama masa promo hingga 30%.</p>
          </div>
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <a href="#" class="hi-icon hi-icon-support glyphicon glyphicon-lock"></a>
            </div>
            <h4>1 Gate & CCTV System</h4>
            <p>Diharapkan penghuni Patraland dapat merasakan kenyamanan tanpa mengkhawatirkan sistem keamanan lingkungan.</p>
          </div>
          <div class="col-md-3 agile-3">
            <div class="icon hi-icon-wrap hi-icon-effect-6">
              <a href="#" class="hi-icon hi-icon-support glyphicon glyphicon-heart"></a>
            </div>
            <h4>Free Semua Pajak</h4>
            <p>Bebas PPN, BPHTB, Notaris, AJB dan Balik Nama, PLN, Air Bersih, dan Taman Depan Kavling.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include("includes/footer.php"); ?>
    <!-- footer -->
    <!--FlexSlider-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
    </script>
    <!--End-slider-script-->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
      });
    });
  </script>
</body>
<!-- //Body -->
</html>
