<?php
include("../config/conn.php");
$sql = "SELECT * FROM tb_slider";
$hasil = mysqli_query($db, $sql);
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
		<?php include("includes/topbar.php"); ?>
		<!-- //Top-Bar -->
		<!-- Slider -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img">
							<img src="images/banner-garden.jpg" class="img-responsive">
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Slider -->
	</div>
	<!-- //Header -->
	<div id="about" class="agileinfo about-page">
		<div class="container">
			<h3>Tentang Garden Residence</h3>
			<div class="row">
				<div class="col-md-4">
					<img src="images/image2.jpg" alt="" srcset="">
					<h4>Lokasi Strategis</h4>
					<br>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="col-md-4">
					<img src="images/image2.jpg" alt="" srcset="">
					<h4>Lokasi Strategis</h4>
					<br>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="col-md-4">
					<img src="images/image2.jpg" alt="" srcset="">
					<h4>Lokasi Strategis</h4>
					<br>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>

			</div>
		</div>
	</div>
	<!-- SECTION PART -->
	<div id="tipe" class="agileinfo tipe-page">
		<div class="container">
			<h3>Tipe Rumah</h3>
			<div class="row">
				<div class="col-md-4">
					<h4>Tipe 45</h4>
					<img src="images/tipe45.jpg" alt="">
				</div>
				<div class="col-md-4">
					<h4>Tipe 48</h4>
					<img src="images/tipe48.jpg" alt="">
				</div>
				<div class="col-md-4">
					<h4>Tipe 54</h4>
					<img src="images/tipe54.jpg" alt="">
				</div>
				<div class="col-md-4">
					<h4>Tipe 70</h4>
					<img src="images/tipe70.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- SECTION PART -->
	<div id="project" class="agileinfo produk-page">
		<div class="container">
			<h3>Site Plan</h3>
			<div class="row siteplan">
				<div id="kecil" class="">
					<img id="gambar" src="images/siteplan.jpg" class="" alt="map" usemap="">
				</div>
				<div id="besar" class="">
					<img id="gambar" src="images/siteplan.jpg" class="mapper" alt="map" usemap="#image-map">
					<map id="coord" name="image-map">
						<area class="noborder icolor555" id="" rel="" target="" alt="sakura" title="Sakura" href="blok.php" coords="361,188,548,295,557,289,560,266,557,240,551,217,535,192,525,180,511,184,501,190,485,190,454,186,415,190,388,182" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="Rosela" href="" coords="279,215,317,208,306,380,294,389,269,339,274,276" shape="poly">
						<area class="noborder icolor555" target="" alt="camelia" title="Camelia" href="" coords="325,384,328,313,333,238,336,212,349,205,549,317,527,351,500,378,484,404,472,428,467,452,459,463" shape="poly">
						<area class="noborder icolor555" target="" alt="Edelweis" title="edelweis" href="" coords="563,343,599,281,613,274,694,317,725,347,813,456,816,499,773,534,765,538,756,529,658,403,567,356" shape="poly">
						<area class="noborder icolor555" target="" alt="magnolia" title="Magnolia" href="" coords="493,526,488,478,493,448,499,442,506,418,524,387,553,360,628,404,647,413,695,475,635,523,578,565,553,585,542,577,527,549,521,538" shape="poly">
						<area class="noborder icolor555" target="" alt="tulip" title="Tulip" href="" coords="560,616,558,603,700,496,710,499,746,546,745,557,601,666,591,662,574,642" shape="poly">
						<area class="noborder icolor555" target="" alt="asoka" title="Asoka" href="" coords="612,689,614,678,815,521,825,527,830,556,836,585,830,599,652,731,627,708" shape="poly">
						<area class="noborder icolor555" target="" alt="lavender" title="Lavender" href="" coords="680,730,676,742,685,749,716,749,764,753,804,721,800,709,771,666,760,671" shape="poly">
						<area class="noborder icolor555" target="" alt="aster" title="Aster" href="" coords="870,532,895,565,968,522,940,479,1026,415,935,359,860,413,854,423,866,500" shape="poly">
						<area class="noborder icolor555" target="" alt="krisan" title="Krisan" href="" coords="837,409,898,365,930,342,972,313,975,304,917,228,847,248,827,267,734,265,736,277" shape="poly">
						<area class="noborder icolor555" target="" alt="Blok-D" title="Blok-D" href="" coords="467,484,340,414,311,399,274,442,289,458,317,479,414,533,461,560,477,561" shape="poly">
					</map>
				</div>
			</div>
			<div class="row">
				<h3>Produk Kami</h3>
				<a href="blok.php" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/asoka.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/aster.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/camelia.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/edelweis.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/lavender.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/magnolia.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/rosela.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/sakura.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/tulip.jpg" alt="" srcset="">
					</div>
				</a>
				<a href="#1" class="">
					<div class="col-md-4 konten hvr-grow">
						<img src="images/blok-d.jpg" alt="" srcset="">
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- SECTION PART -->
	<div id="kontak" class="agileinfo kontak">
		<div class="container">
			<h3>Hubungi Kami</h3>
			<div class="row">
				<div class="col-md-6 kontak-col2">
					<div class="row">
						<div class="col-md-6 kontak-col">
							<div class="row">
								<div class="col-md-4 kontak-icon">
									<img src="images/icon/instagram.png" alt="">
								</div>
								<div class="col-md-8 wrap">
									<h4>Follow Us</h4>
									<!-- <br> -->
									<p>@patraland</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 kontak-col">
							<div class="row">
								<div class="col-md-4 kontak-icon">
									<img src="images/icon/facebook.png" alt="">
								</div>
								<div class="col-md-8 wrap">
									<h4>Follow Us</h4>
									<!-- <br> -->
									<p>@patraland</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 kontak-col">
							<div class="row">
								<div class="col-md-4 kontak-icon">
									<img src="images/icon/whatsapp.png" alt="">
								</div>
								<div class="col-md-8 wrap">
									<h4>Follow Us</h4>
									<!-- <br> -->
									<p>@patraland</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 kontak-col">
							<div class="row">
								<div class="col-md-4 kontak-icon">
									<img src="images/icon/email.png" alt="">
								</div>
								<div class="col-md-8 wrap">
									<h4>Follow Us</h4>
									<!-- <br> -->
									<p>@patraland</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 kontak-col">
							<div class="row">
								<div class="col-md-4 kontak-icon">
									<img src="images/icon/telepon.png" alt="">
								</div>
								<div class="col-md-8 wrap">
									<h4>Follow Us</h4>
									<!-- <br> -->
									<p>@patraland</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 kontak-col">
							<div class="row">
								<div class="col-md-4 kontak-icon">
									<img src="images/icon/instagram.png" alt="">
								</div>
								<div class="col-md-8 wrap">
									<h4>Follow Us</h4>
									<!-- <br> -->
									<p>@patraland</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.812086876858!2d112.61239785820861!3d-7.914688740579999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881fc7bf3a3b9%3A0xcad5da6cf7d0fcaa!2sPatra%20Garden%2C%20Kedawung%2C%20Ngijo%2C%20Kec.%20Karang%20Ploso%2C%20Malang%2C%20Jawa%20Timur%2065152!5e0!3m2!1sen!2sid!4v1579590118093!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
	<script>
		(function($) {
			var $window = $(window),
				$kecil = $("#kecil");
			$besar = $("#besar");

			function resize() {
				if ($window.width() < 1200) {
					return $besar.addClass("dis");
				} else {
					return $kecil.addClass("dis");
				}

				// $html.addClass('mobile');
			}

			$window
				.resize(resize)
				.trigger('resize');
		})(jQuery);
	</script>
	<script type="text/javascript" src="js/wz_jsgraphics.js"></script>
	<script type="text/javascript" src="js/mapper.js"></script>
</body>
<!-- //Body -->

</html>