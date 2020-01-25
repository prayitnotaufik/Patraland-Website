<?php
include("config/conn.php");
$sql = "SELECT * FROM tb_contact";
$sql1 = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($sql1);
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
	<div class="contact wthree-3">
		<div class="container">
			<h2 class="tittle">Contact</h2>
			<div class="col-md-4 content-pro-head content-pro-head3 agile-6">
				<h4>Address</h4>
				<ul class="contact-list agileits-6">
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $data['lokasi']; ?></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo $data['telp']; ?></li>
				</ul>
			</div>
			<div class="col-md-8 content-pro-head1 w3agile-6">
				<form action="proc/contact-submit.php" method="post">
					<div class=" grid-contact agileinfo-6">
						<div class="your-top">
							<input type="text" placeholder="Name" name="name" required="">
							<div class="clearfix"> </div>
						</div>
						<div class="your-top">
							<input type="text" placeholder="E-mail" name="email" required="">
							<div class="clearfix"> </div>
						</div>
						<div class="your-top">
							<input type="text" placeholder="Telephone" name="telp" required="">
							<div class="clearfix"> </div>
						</div>
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="w3l-map">
		<?php echo $data['maps']; ?>
	</div>
	<!--/ w3l-1 -->
	<!-- footer -->
	<?php include("includes/footer.php"); ?>
	<!-- footer -->
</body>
<!-- //Body -->

</html>

<?php
?>
