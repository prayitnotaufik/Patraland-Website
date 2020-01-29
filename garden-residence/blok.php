<?php
include("../config/conn.php");
$nb = @$_GET['nb'];
$sql_blok = mysqli_query($db, "SELECT * FROM tb_blok WHERE name_blok = '$nb'");
$row = mysqli_fetch_assoc($sql_blok);
$id_blok = $row['id_blok'];
$sql_unit = mysqli_query($db, "SELECT * FROM tb_unit_blok WHERE id_blok = '$id_blok' AND category = 'Garden' ORDER BY status DESC");
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
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <!-- //Custom-Theme-Files -->
  <!-- Web-Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
  <!-- //Web-Fonts -->
  <!-- Default-JavaScript-File -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>

  </script>
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
  <style type="text/css">
  .wrap p {
    word-wrap: break-word;
  }
  .tot {
    color:#888;
    font-weight: bold;
    font-style: italic;
    width:auto;
    padding:8px;
  }
  </style>

</head>
<!-- //Head -->
<!-- Body -->

<body>
  <!-- Header -->
  <div class="header w3layouts-1">
    <!-- Top-Bar -->
    <?php include("includes/topbar-blok.php"); ?>
    <!-- //Top-Bar -->
  </div>
  <!-- SECTION PART -->
  <div id="project" class="agileinfo produk-page">
    <div class="container">
      <h3><?php echo $row['name_blok']; ?> Siteplan</h3>
      <div class="row siteplan">
        <div id="kecil" class="">
          <img id="gambar" src="images/blok/<?php echo $row['siteplan']; ?>" class="" alt="map" usemap="">
        </div>
      </div>
    </div>
  </div>
  <!-- agileinfo -->
  <div id="ready" class="agileinfo ready">
    <div class="container">
      <h3>Daftar Unit</h3>
      <p class="ttt">Daftar unit yang tersedia selalu di update oleh admin website, untuk data yang lebih akurat silahkan hubungi Marketing</p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Unit</th>
            <th>Tipe Rumah</th>
            <th>Luas Tanah/Bangunan</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($row1 = mysqli_fetch_assoc($sql_unit)) {
            ?>
            <tr>
              <td><?php echo $row1['unit']; ?></td>
              <td><?php echo $row1['type']; ?></td>
              <td><?php echo $row1['lt_b']; ?></td>
              <?php
              if($row1['status'] == "Tersedia") {
                ?>
                <td style="text-transform:uppercase; background:#31ff31c2; color:#FFF;"><b><?php echo $row1['status']; ?></b></td>
              <?php } else { ?>
                <td style="text-transform:uppercase; background:#ff3131c2; color:#FFF;"><b><?php echo $row1['status']; ?></b></td>
              <?php } ?>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="tot">
        Tersedia : <?php
        $sql_count1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT COUNT(*) AS tsd FROM tb_unit_blok WHERE id_blok = '$id_blok' AND status = 'Tersedia'"));
        echo $sql_count1['tsd'];
        ?>
        <br>
        Terjual : <?php
        $sql_count1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT COUNT(*) AS tjl FROM tb_unit_blok WHERE id_blok = '$id_blok' AND status = 'Terjual'"));
        echo $sql_count1['tjl'];
        ?>
      </div>
    </div>
  </div>
  <!-- agileinfo -->
  <!-- SECTION PART -->
  <?php
  $sql3 = mysqli_query($db, "SELECT * FROM tb_contact_proyek WHERE category = 'Garden'");
  $data3 = mysqli_fetch_array($sql3);
  ?>
  <div id="kontak" class="agileinfo kontak">
    <div class="container">
      <h3>Hubungi Kami</h3>
      <div class="row">
        <div class="col-md-6 kontak-col2 mb-5">
          <div class="row">
            <a href="https://www.instagram.com/<?php echo $data3['instagram']; ?>">
              <div class="col-md-6 kontak-col">
                <div class="row">
                  <div class="col-md-4 kontak-icon">
                    <img src="images/icon/instagram.png" alt="">
                  </div>
                  <div class="col-md-8 wrap">
                    <h4>Instagram</h4>
                    <!-- <br> -->
                    <p>&#64;<?php echo $data3['instagram']; ?></p>
                  </div>
                </div>
              </div>
            </a>
            <a href="<?php echo $data3['facebook']; ?>">
              <div class="col-md-6 kontak-col">
                <div class="row">
                  <div class="col-md-4 kontak-icon">
                    <img src="images/icon/facebook.png" alt="">
                  </div>
                  <div class="col-md-8 wrap">
                    <h4>Facebook</h4>
                    <!-- <br> -->
                    <p>PT Patraland Griya Madani</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-md-6 kontak-col">
                <div class="row">
                  <div class="col-md-4 kontak-icon">
                    <img src="images/icon/whatsapp.png" alt="">
                  </div>
                  <div class="col-md-8 wrap">
                    <h4>Whatsapp</h4>
                    <!-- <br> -->
                    <p><?php echo $data3['whatsapp']; ?></p>
                  </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-md-6 kontak-col">
                <div class="row">
                  <div class="col-md-4 kontak-icon">
                    <img src="images/icon/email.png" alt="">
                  </div>
                  <div class="col-md-8 wrap">
                    <h4>E-Mail</h4>
                    <!-- <br> -->
                    <p><?php echo $data3['email']; ?></p>
                  </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-md-6 kontak-col">
                <div class="row">
                  <div class="col-md-4 kontak-icon">
                    <img src="images/icon/telepon.png" alt="">
                  </div>
                  <div class="col-md-8 wrap">
                    <h4>Call</h4>
                    <!-- <br> -->
                    <p><?php echo $data3['telephone']; ?></p>
                  </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-md-6 kontak-col">
                <div class="row">
                  <div class="col-md-4 kontak-icon">
                    <img src="images/icon/lokasi.png" alt="">
                  </div>
                  <div class="col-md-8 wrap">
                    <h4>Office</h4>
                    <!-- <br> -->
                    <p><?php echo $data3['location']; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 center">
          <?php echo $data3['maps']; ?>
          <!-- <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.812086876858!2d112.61239785820861!3d-7.914688740579999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881fc7bf3a3b9%3A0xcad5da6cf7d0fcaa!2sPatra%20Garden%2C%20Kedawung%2C%20Ngijo%2C%20Kec.%20Karang%20Ploso%2C%20Malang%2C%20Jawa%20Timur%2065152!5e0!3m2!1sen!2sid!4v1579590118093!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
        </div>
      </div>
    </div>
  </div>
  <!-- SECTION PART -->
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
<!-- <script type="text/javascript">
function width() {
if ($(window).width() < 1200) {
// $("#ilang").hide();
$("#kecil").removeClass("dis");
// $("#coord").hide();
}
if ($(window).width() > 1200) {
// $("#ilang").show();
$("#kecil").addClass("dis");
// $("$gak_ilang").hide();
}
}
$(window);
</script> -->
<!-- <script>
(function($) {
var $window = $(window),
$kecil = $("#kecil");
$besar = $("#besar");

function resize() {
if ($window.width() < 1200) {
return $besar.addClass("dis");
}else{
return $kecil.addClass("dis");
}

// $html.addClass('mobile');
}

$window
.resize(resize)
.trigger('resize');
})(jQuery);
</script> -->
<script type="text/javascript" src="js/wz_jsgraphics.js"></script>
<script type="text/javascript" src="js/mapper.js"></script>
</body>
<!-- //Body -->

</html>
