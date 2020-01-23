<?php
include("config/conn.php");
$sql3 = "SELECT * FROM tb_thumbnail";
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
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/component.css" />

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" /> -->
	<!-- <link rel="stylesheet" href="css/cards-gallery.css"> -->

	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
	<link rel="stylesheet" href="css/card.css">
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
	<div class="services wthree-3">
		<div class="container">
			<h2 class="tittle">Project</h2>
			<div class="friend-grids">
				<div class="col-md-3 friend-grid shad">
					<div class="boxx">
						<a href="patra-garden">
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
						<a href="patra-garden">
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
						<a href="patra-garden">
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
						<a href="patra-garden">
							<img src="images/thumbnail/madani.jpg" alt="Project Thumbnail">
							<div class="pad">
								<b>Griya Madani</b>
								<p><i>Curungrejo, Kepanjen</i></p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<a href="patra-garden" class="a-project stretched-link">
					<div class="col-md-4 card">
						<img src="images/image1.jpg" alt="Avatar">
						<div class="container-card">
							<h4><b>Garden Residence</b></h4>
							<p>Kata kata patra garden</p>
						</div>
					</div>
				</a>
				<a href="patra-garden" class="a-project">
					<div class="col-md-4 card">
						<img src="images/image1.jpg" alt="Avatar">
						<div class="container-card">
							<h4><b>Patra Garden</b></h4>
							<p>Kata kata patra garden</p>
						</div>
					</div>
				</a>
				<a href="patra-garden" class="a-project">
					<div class="col-md-4 card">
						<img src="images/image1.jpg" alt="Avatar">
						<div class="container-card">
							<h4><b>Patra Garden</b></h4>
							<p>Kata kata patra garden</p>
						</div>
					</div>
				</a>
			</div> -->
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!--/ w3l-1 -->

	<!--/ w3l-1 -->

	<!-- footer -->
	<?php include("includes/footer.php"); ?>
	<!-- footer -->
</body>
<!-- //Body -->

</html>