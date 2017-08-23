<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Project 1</title>

    <!-- Bootstrap -->
    <link href="css/cust_div.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
   </head>
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-4 col-md-offset-4 controldivreg">
         <div class="regform">
          <form action="result.php" method="post" id="fsignup">
            <fieldset class="form-group">
              <label for="Name"> Name </label>
              <input type="text" class="form-control" id="name_val" name="name1" placeholder="Enter your Full Name">
            </fieldset>
            <fieldset class="form-group">
              <label for="Email1"> Email address </label>
              <input type="email" class="form-control" id="email_val" name="email1" placeholder="Enter email">
              <small class="text-muted">We'll never share your email with anyone else.</small>
            </fieldset>
            <fieldset class="form-group">
              <label for="dataofbirth"> Date Of Birth </label>
              <input type="date" name="date" class="form-control" placeholder=" Enter Your DOB ">
            </fieldset>
            <fieldset class="form-group">
              <label for="Password1"> Password </label>
              <input type="password" class="form-control" id="pass_val" name="pass1" placeholder="Password">
            </fieldset>
      <!--     <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div> -->
            <button type="submit" class="btn btn-primary" style="margin-left:40%;">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <script src="js/bootstrap.min.js"></script>
    <script>
      function fnreset() {
          document.getElementById("fsignup").reset();
      }
      window.onload = fnreset;
    </script>
  </body>
</html>
