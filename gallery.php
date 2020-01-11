<!DOCTYPE html>
<?php
include("config/conn.php");
?>
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
	<link rel="stylesheet" href="css/swipebox.css">
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
	<div class="header w3layouts-1">
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
	<div class="gallery wthree-3">
		<div class="container">
			<h2 class="tittle">Gallery</h2>
			<div align="center">
				<button class="btn btn-default filter-button" data-filter="all">Show All</button>
				<button class="btn btn-default filter-button " data-filter="1">Kencana Residence</button>
				<button class="btn btn-default filter-button " data-filter="2">Garden Residence</button>
				<button class="btn btn-default filter-button " data-filter="3">The Island Cluster</button>
				<button class="btn btn-default filter-button " data-filter="4">Griya Madani</button>
			</div>
			<!-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div>

			<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
				<img src="http://fakeimg.pl/365x365/" class="img-responsive">
			</div> -->
			<!-- GALLERY DEFAULT -->
			<!-- CATEGORY 1 -->
			<?php
			$query = "SELECT * FROM tb_gallery WHERE category=1";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<div class="col-md-4 gal-left gal_mar gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 1">
						<div class="content-grid-effect slow-zoom vertical text-center">
							<a href="images/gallery/<?php echo $row["image"] ?>" class="b-link-stripe b-animate-go  swipebox">
								<div class="img-box">
									<img src="images/gallery/<?php echo $row["image"] ?>" alt="image" class="img-responsive zoom-img">
								</div>
								<div class="info-box">
									<div class="info-content">
										<h4><?php echo $row["title"] ?></h4>
										<span class="separator"></span>
										<p><?php echo $row["caption"] ?></p>
									</div>
								</div>
							</a>
						</div>
					</div>
			<?php }
			}
			?>
			<!-- CATEGORY 1 -->
			<!-- CATEGORY 2 -->
			<?php
			$query = "SELECT * FROM tb_gallery WHERE category=2";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<div class="col-md-4 gal-left gal_mar gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 2">
						<div class="content-grid-effect slow-zoom vertical text-center">
							<a href="images/gallery/<?php echo $row["image"] ?>" class="b-link-stripe b-animate-go  swipebox">
								<div class="img-box">
									<img src="images/gallery/<?php echo $row["image"] ?>" alt="image" class="img-responsive zoom-img">
								</div>
								<div class="info-box">
									<div class="info-content">
										<h4><?php echo $row["title"] ?></h4>
										<span class="separator"></span>
										<p><?php echo $row["caption"] ?></p>
									</div>
								</div>
							</a>
						</div>
					</div>
			<?php }
			}
			?>
			<!-- CATEGORY 2 -->
			<!-- CATEGORY 3 -->
			<?php
			$query = "SELECT * FROM tb_gallery WHERE category=3";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<div class="col-md-4 gal-left gal_mar gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 3">
						<div class="content-grid-effect slow-zoom vertical text-center">
							<a href="images/gallery/<?php echo $row["image"] ?>" class="b-link-stripe b-animate-go  swipebox">
								<div class="img-box">
									<img src="images/gallery/<?php echo $row["image"] ?>" alt="image" class="img-responsive zoom-img">
								</div>
								<div class="info-box">
									<div class="info-content">
										<h4><?php echo $row["title"] ?></h4>
										<span class="separator"></span>
										<p><?php echo $row["caption"] ?></p>
									</div>
								</div>
							</a>
						</div>
					</div>
			<?php }
			}
			?>
			<!-- CATEGORY 3 -->
			<!-- CATEGORY 4 -->
			<?php
			$query = "SELECT * FROM tb_gallery WHERE category=4";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<div class="col-md-4 gal-left gal_mar gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 4">
						<div class="content-grid-effect slow-zoom vertical text-center">
							<a href="images/gallery/<?php echo $row["image"] ?>" class="b-link-stripe b-animate-go  swipebox">
								<div class="img-box">
									<img src="images/gallery/<?php echo $row["image"] ?>" alt="image" class="img-responsive zoom-img">
								</div>
								<div class="info-box">
									<div class="info-content">
										<h4><?php echo $row["title"] ?></h4>
										<span class="separator"></span>
										<p><?php echo $row["caption"] ?></p>
									</div>
								</div>
							</a>
						</div>
					</div>
			<?php }
			}
			?>
			<!-- CATEGORY 4 -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!--/ w3l-1 -->
	<!-- footer -->
	<?php include("includes/footer.php"); ?>
	<!-- footer -->
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

			$(".filter-button").click(function() {
				var value = $(this).attr('data-filter');

				if (value == "all") {
					//$('.filter').removeClass('hidden');
					$('.filter').show('1000');
				} else {
					//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
					//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
					$(".filter").not('.' + value).hide('3000');
					$('.filter').filter('.' + value).show('3000');

				}
			});

			if ($(".filter-button").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");

		});
	</script>
	<!-- //swipe box js -->
</body>
<!-- //Body -->

</html>