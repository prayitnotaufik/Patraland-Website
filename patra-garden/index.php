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
					<?php
					while ($data = mysqli_fetch_assoc($hasil)) {
					?>
						<li>
							<div class="slider-img">
								<img src="images/slide-ps4.jpg" class="img-responsive">
							</div>
							<!-- <div class="slider-info w3ls-1">
  							<h3><?php echo $data['title']; ?></h3>
  							<div class="underline"></div>
  							<p><?php echo $data['caption']; ?></p>
  						</div> -->
						</li>
					<?php } ?>
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
</body>
<!-- //Body -->

</html>