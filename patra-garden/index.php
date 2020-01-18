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
							<img src="images/slide-ps4.jpg" class="img-responsive">
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
						<area class="noborder icolor555" id="" rel="" target="" alt="" title="" href="blok.php" coords="361,188,548,295,557,289,560,266,557,240,551,217,535,192,525,180,511,184,501,190,485,190,454,186,415,190,388,182" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="279,215,317,208,306,380,294,389,269,339,274,276" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="335,219,342,205,362,214,549,319,526,349,504,373,489,371,337,285,330,275" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="563,343,599,281,613,274,694,317,725,347,813,456,816,499,773,534,765,538,756,529,658,403,567,356" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="511,428,507,415,546,362,560,366,628,404,645,413,694,476,641,519,629,518,594,473,559,456" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="560,616,558,603,700,496,710,499,746,546,745,557,601,666,591,662,574,642" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="612,689,614,678,815,521,825,527,830,556,836,585,830,599,652,731,627,708" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="680,730,676,742,685,749,716,749,764,753,804,721,800,709,771,666,760,671" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="870,532,895,565,968,522,940,479,1026,415,935,359,860,413,854,423,866,500" shape="poly">
						<area class="noborder icolor555" target="" alt="" title="" href="" coords="837,409,898,365,930,342,972,313,975,304,917,228,847,248,827,267,734,265,736,277" shape="poly">
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
			</div>
		</div>
	</div>
	<!-- agileinfo -->
	<div id="welcome" class="agileinfo">
		<div class="container">
			<h3>Welcome</h3>
			<p class="ttt">when an unknown printer took a galley of type and scrambled Lorem Ipsum passages, and more recently it to make a type specimen book.</p>
			<div class="flexslider-info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner-info">
									<div class="col-md-7 agileinfo-left">
										<img src="images/slide-1.jpg" alt="">
									</div>
									<div class="col-md-5 agileinfo-grid grid-one">
										<h4>Temporibus autem</h4>
										<p>Libero tempore, cum soluta nobis est eligendi
											optio cumque nihil impedit quo minus id quod maxime
											placeat facere possimus ut
											et voluptates repudiandae sint et molestiae non recusandae</p>

									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<div class="col-md-7 agileinfo-left">
										<img src="images/slide-2.jpg" alt="">
									</div>
									<div class="col-md-5 agileinfo-grid grid-one">
										<h4>Temporibus autem</h4>
										<p>Libero tempore, cum soluta nobis est eligendi
											optio cumque nihil impedit quo minus id quod maxime
											placeat facere possimus ut
											et voluptates repudiandae sint et molestiae non recusandae</p>

									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<div class="col-md-7 agileinfo-left">
										<img src="images/slide-3.jpg" alt="">
									</div>
									<div class="col-md-5 agileinfo-grid grid-one">
										<h4>Temporibus autem</h4>
										<p>Libero tempore, cum soluta nobis est eligendi
											optio cumque nihil impedit quo minus id quod maxime
											placeat facere possimus ut
											et voluptates repudiandae sint et molestiae non recusandae</p>

									</div>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
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
	<script>
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
	</script>
	<script type="text/javascript" src="js/wz_jsgraphics.js"></script>
	<script type="text/javascript" src="js/mapper.js"></script>
</body>
<!-- //Body -->

</html>