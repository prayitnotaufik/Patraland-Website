<?php
include("config/conn.php");
$idnews = $_GET['id'];
$sql = "SELECT * FROM tb_news WHERE id_news = '$idnews'";
$result = mysqli_query($db,$sql);
$data = mysqli_fetch_assoc($result);
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
  <link rel="stylesheet" href="css/about.css" type="text/css" media="all">
  <!-- //Custom-Theme-Files -->
  <!-- Web-Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
  <!-- //Web-Fonts -->
  <!-- Default-JavaScript-File -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
  .bts {
    clear:both;
    margin:20px 0px;
    border-bottom:1px solid #ddd;
  }
  h5{
    margin: 0;

  }
  h3{
    color: #EFA52C;
    margin: 10px 0px 15px;
    padding-bottom:10px;
    padding-left: 10px;
    border-left: 5px solid #EFA52C;
  }
  .sidebar.widget {
    background: #f2f2f2;
    border: 1px solid #ddd;
    padding: 10px 20px;
  }
  .sidebar.widget ul {
    margin: 0px;
    padding: 0;
    overflow: hidden;
  }
  .sidebar.widget ul li {
    overflow: hidden;
    font-size: 14px;
    margin-bottom: 10px;
    border-bottom: 1px dashed #ddd;
    padding-bottom: 20px
  }
  a {
    color:#000;
  }
  a:hover {
    color:#EFA52C;
  }
  </style>
</head>
<!-- //Head -->
<!-- Body -->

<body>
  <!-- Header -->
  <div class="header">
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
  <div class="about-bottom wthree-3">
    <div class="container">
      <div class="agileinfo_about_bottom_grids">
        <div class="col-md-8 agileinfo_about_bottom_grid">
          <img src="images/news/<?php echo $data['image']; ?>" alt=" " class="img-responsive" style="width:100%; margin-bottom:20px; border:10px solid #ddd;">
          <h5><b><a href="" style="color:black;"><?php echo $data['title']; ?></a></b></h5>
          <div style="position:inherit"><small><i>(Posted by <u style="text-transform:capitalize;"><?php echo $data['author']; ?></u> - <?php echo $data['date']; ?>)</i></small></div>
          <p><?php echo $data['description']; ?></p>
          <div style="position:relative; margin-top:20px;">
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fpatraland.co.id%2F&layout=button_count&size=small&width=101&height=20&appId" width="101" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="col-md-4 agileinfo_about_bottom_grid">
          <div style="position:inherit; border-top:1px solid #ddd; padding:20px;">
            <div class="sidebar widget">
              <h3>Recent Post</h3>
              <ul>
                <?php
                $sql1 = "SELECT * FROM tb_news ORDER BY date DESC LIMIT 5";
                $result1 = mysqli_query($db,$sql1);
                while($data1 = mysqli_fetch_assoc($result1)) {
                  ?>
                  <li>
                    <a href="news-detail.php?id=<?php echo $data1['id_news']; ?>">
                      <small><i><?php echo $data1['date']; ?></i></small> -
                      <img src="images/news/<?php echo $data1['image']; ?>" alt=" " class="img-responsive" style="width:75px; height:75px; margin-right:10px; float:left; border:5px solid #ddd;">
                      <b><?php echo substr($data1['title'], 0, 50);?></b>
                      <?php
                      $string = $data1['title'];
                        if(strlen($string) > 50) {
                          echo "...";
                        }
                      ?>
                    </a>
                  </li><!-- .Li ends here -->
                <?php } ?>
                <center><a href="news.php">-- Show More --</a></center>
              </ul><!-- .Ul ends here -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--/ w3l-1 -->
  <!-- footer -->
  <?php include("includes/footer.php"); ?>
  <!-- footer -->
</body>
<!-- //Body -->

</html>
