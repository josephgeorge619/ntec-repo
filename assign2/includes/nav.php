<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">My Company</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Products</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">About Us</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Location in Map</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Suggestions</a></li>
          </ul>
        </li>
        <?php
          session_start();
          if(isset($_SESSION['login_user']))
          {
            if($_SESSION['login_user'] == 'admin@localhost.com')
            {
              echo '<li><a href="includes/admin.php">Admin</a></li>';
            }
          } ?>
      </ul>
      <div class="" style="float:right; line-height:4; ">
        <?php
        if(isset($_SESSION['login_user']))
        {
          echo "<b>logged in as ";
          echo $_SESSION['login_user'];
          echo "  </b>";
          echo '<a class="btn btn-info btn-lg" href="includes/logout.php">Log Out</a>';
        }
        else {
          echo '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">Log In</button>';
          echo '<button type="button" class="btn btn-info btn-lg" style="margin-left:5px;" data-toggle="modal" data-target="#register">Register</button>';
        } ?>
      </div>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>


<?php
include("includes/login.php");
include("includes/register.php");
?>
