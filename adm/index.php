<?php
include("../config/conn.php");
session_start();
if(@$_SESSION['status'] == "login") {
  echo "<script type='text/javascript'>window.location.href='home.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	<title>PT. Patraland</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Premier Realty a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="../css/component.css" />
	<!-- //Custom-Theme-Files -->
	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	<!-- //Web-Fonts -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script src="../js/responsiveslides.min.js"></script>
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
 <style>
 .login {
   height:100%;
   margin:0 auto;
   width:100%;
   text-align:center;
   padding-top:180px;
   background:url(images/slide-1.jpg) no-repeat 0px 0px;
   background-size: cover;
 }
 .custom-login {
   width: 30%;
   margin: 0 auto;
   border-radius: 10px;
 }

 @media screen and (max-width:500px) {
   .custom-login {
     width:70%;
   }
 }

 @media screen and (max-width:700px) {
   .custom-login {
     width:50%;
   }
 }

 @media screen and (max-height:400px) {
   .login {
     padding-top:17%;
   }
 }

 .cust-btn {
   min-width:100%;
 }
 .panel {
   background-color:rgba(0,0,0,0.6);
   border:none;
   color:#FFF;
 }
 </style>

</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<div class="header w3layouts-1">
		<!-- Top-Bar -->
      <?php
      include("includes/topbar.php");
      ?>
		<!-- //Top-Bar -->
		<!-- Slider -->

			<div class="clearfix"></div>
		<!-- //Slider -->
	</div>
	<!-- //Header -->
<!-- agileinfo -->

<!-- agileinfo -->
<!-- friend-agent -->
<!-- friend-agent -->
<div class="container login">
  <div class="panel panel-default custom-login">
      <div class="panel-body">
          <form action="" method="post">
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control form-control-block" name="username">
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password">
              </div>
              <input type="submit" class="btn btn-primary cust-btn" name="submit" value="Login">
          </form>
      </div>
  </div>
</div>
<!-- footer -->
<?php
//  include("includes/footer.php");
?>
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

<?php
if(isset($_POST["submit"])) {
  $username = @$_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM tb_login WHERE username = '$username'";
  $query = $db->query($sql);
  $hasil = $query->fetch_assoc();
  if($query->num_rows == 0) {
   echo "<script type='text/javascript'>alert('Username dan Password tidak ada!');window.location.href='index.php';</script>";
  } else {
   if($pass <> $hasil['password']) {
     echo "<script type='text/javascript'>alert('Password Salah!');window.location.href='index.php';</script>";
   } else {
     session_start();
     $_SESSION['username'] = $hasil['username'];
     $_SESSION['status'] = "login";
     header('location:home.php');
   }
  }
}
?>
