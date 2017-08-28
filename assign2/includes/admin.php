<?php
session_start(); //Start the session
if(!isset($_SESSION['login_user'])){ //If session not registered
  echo "my login user is $login_user";
header("location:../index.php"); // Redirect to login.php page
}
// else //Continue to current page
// header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome To Admin Page Demonstration</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/customdiv.css" rel="stylesheet">
</head>
<body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
    <?php include("nav_admin.php"); ?>
    <div class="container-fluid" style="margin-top:2%;">
    <h1>Welcome To Admin Page <?php echo $_SESSION['login_user'] /*Echo the username */ ?></h1>
    <p><a href="logout.php">Logout</a></p> <!-- A link for the logout page -->
    <p>Put Admin Contents</p>
  </div>
</body>
  <?php include("footer.html"); ?>
</html>
