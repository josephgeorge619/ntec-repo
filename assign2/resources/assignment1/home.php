<?php
session_start();
if(!isset($_SESSION['login_user'])){ //If session not registered
  echo "my login user is $login_user";
  header("location:../../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Assignment 1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/customdiv.css" rel="stylesheet">
    <script src="http://maps.google.com/maps/api/js?sensor=false"
          type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../../index.php">Home<span class="sr-only">(current)</span></a></li>
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
          </ul>
          <div class="" style="float:right; line-height:3.35">
            <?php
            if(isset($_SESSION['login_user']))
            {
              echo "<b>logged in as ";
              echo $_SESSION['login_user'];
              echo "  </b>";
              echo '<a href="../../includes/logout.php" class="btn btn-info btn-lg" role="button">Log Out</a>';
            } ?>
          </div>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <section>
    <div class="container customtopmargin">
      <div class="row">
          <div class="col-md-12 row_bottom_buffer"><div class="customdiv" id="map"></div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align:center; min-height:10px;"><b>Developer Profile</b></div>
        <div class="col-md-12 customdiv row_top_buffer row_bottom_buffer"><iframe src=hc_charts/barchart.html width="100%" height="550px" frameborder="1"></iframe></div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align:center; min-height:10px;"><b>Technology</b></div>
        <div class="col-md-12 customdiv row_top_buffer row_bottom_buffer"><iframe src=hc_charts/bar-column.html width="100%" height="550px" frameborder="1"></iframe></div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align:center; min-height:10px;"><b>Work</b></div>
        <div class="col-md-12 customdiv row_top_buffer row_bottom_buffer"><iframe src=hc_charts/bar-stacked.html width="100%" height="550px" frameborder="1"></iframe></div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align:center; min-height:10px;"><b>Community</b></div>
        <div class="col-md-12 customdiv row_top_buffer row_bottom_buffer"><iframe src=hc_charts/bar-column_overflow.html width="100%" height="550px" frameborder="1"></iframe></div>
      </div>
    </div>
</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var locations = [
      ['', -43.5342383, 172.6310104, 4],
      ['Kaikoura, Few places in the world can boast of such natural wonders as those offered by land and sea.', -42.3987123, 173.6481361, 5],
      ['Hanmer Springs, Surrounded by mountains and forests with crisp alpine air and award winning natural thermal pools, the village of Hanmer Springs is a simply magical place.', -42.5237292, 172.8208314, 3],
      ['Arthur\'s Pass, previously called Camping Flat then Bealey Flats, and for some time officially Arthurs Pass, is a township in the Southern Alps of the South Island of New Zealand, located in the Selwyn district.', -42.9424889, 171.5557791, 2],
      ['Ashburton is the gateway to some of the South Island of New Zealand\'s most spectacular scenery.', -43.8950166, 171.6502911, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(-43.0113913, 172.5654301),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    </script>

  </body>
  <footer><p><div class="navbar-fixed-bottom footerline"></div><div class="navbar-fixed-bottom footerdesgin">Created By Joseph George</div></p></footer>
</html>
