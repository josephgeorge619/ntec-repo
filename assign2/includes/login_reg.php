<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Assignment 2</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/customdiv.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php include("nav_login.php"); ?>

            <div class="col-md-6 col-md-offset-3 controldivreg" style="margin-top: 10%;">
              <div class="loginform">
                 <form action="check_login.php" method="post" id="login">
                 <fieldset class="form-group">
                   <label for="Email1"> Email </label>
                   <input type="email" class="form-control" id="email_val" name="username" placeholder="Enter Email ID" required>
                 </fieldset>
                 <fieldset class="form-group">
                   <label for="Password1"> Password </label>
                   <input type="password" class="form-control" id="pass_val" name="password" placeholder="Password" required>
                 </fieldset>
                 <button type="submit" class="btn btn-primary" style="margin-left:40%;">Log In</button>
               </form>
               </div>
             </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
  function fnreset() {
      document.getElementById("login").reset();
  }
  window.onload = fnreset;
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
<?php include("footer.html"); ?>
</html>
