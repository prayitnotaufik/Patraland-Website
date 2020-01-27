<?php
include("../config/conn.php");
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
			<h3>Asoka Siteplan</h3>
			<div class="row siteplan">
				<div id="kecil" class="">
					<img id="gambar" src="images/blok/asoka.png" class="" alt="map" usemap="">
				</div>
			</div>
		</div>
	</div>
	<!-- agileinfo -->
	<div id="welcome" class="agileinfo">
		<div class="container">
			<h3>Daftar Unit</h3>
			<p class="ttt">Daftar unit yang tersedia selalu di update oleh admin website,untuk data yang lebih akurat silahkan hubungi Marketing</p>
			<table class="table table-hover">
			<thead>
				<tr>
					<th>Blok</th>
					<th>Tipe Rumah</th>
					<th>Luas Tanah/Bangunan</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Blok-1</td>
					<td>36</td>
					<td>78m/56m</td>
					<td><b>TERSEDIA</b></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
	<!-- agileinfo -->
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