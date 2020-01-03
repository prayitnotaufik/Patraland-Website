<div class="top-bar w3-1" style="background:#000;" style="height:200px;">
<div class="container">
  <div class="header-nav w3-agileits-1">
    <nav class="navbar navbar-default">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1><a class="navbar-brand" href="../index.php">Patraland</a></h1>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->

      <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav ">
          <?php
            if(@$_SESSION['status'] == "login") {
          ?>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="project.php">Project</a></li>
          <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
          <li><a href="contact.php">Contact</a></li>
          <?php } ?>
          <li><a href="">Login</a></li>
        </ul>
      </div><!-- /navbar-collapse -->
    </nav>
  </div>
</div>
</div>
