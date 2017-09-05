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
    <div class="container-fluid" style="margin-top:3%;">
    <h1 style="text-align:center;">Welcome To Admin Page</h1>

    <div class="col-md-10 col-lg-offset-1" >
        <div class="table-responsive" style="width:100%;height:100%;">
          <?php
          $num_rec_per_page=10;
          include("config.php");
          mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
                  or die('Error Connecting to MySQL DataBase');
          ;
          if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
          $start_from = ($page-1) * $num_rec_per_page;
          $sql = "SELECT * FROM usr_tab LIMIT $start_from, $num_rec_per_page";
          $rs_result = mysqli_query ($dbC,$sql); //run the query
          ?>
          <div class="col-md-10 col-md-offset-1">
          <table class="table table-hover table-bordered" style="width:100%;">
            <thead>
              <tr class=\"row\" style=\"text-align:center;\">
                  <td>Name</td>
                  <td>Email</td>
                  <td>Phone</td>
                  <td>Age</td>
                </tr>
            </thead>";
          <?php
          while ($row = mysqli_fetch_assoc($rs_result)) {
          ?>

                          <tr>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['phone']; ?></td>
                          <td><?php echo $row['age']; ?></td>
                          </tr>


          <?php
          };
          ?>
          </table>
          <?php
          $sql = "SELECT * FROM usr_tab";
          $rs_result = mysqli_query($dbC,$sql); //run the query
          $total_records = mysqli_num_rows($rs_result);  //count number of records
          $total_pages = ceil($total_records / $num_rec_per_page);
          echo "<ul class=\"pagination pagination\" style=\"float:right;\">";
          echo "<li><a href='admin.php?page=1'>".'|<'."</a></li>"; // Goto 1st page

          for ($i=1; $i<=$total_pages; $i++) {
                      echo "<li><a href='admin.php?page=".$i."'>".$i."</a> </li>";
          };
          echo "<li><a href='admin.php?page=$total_pages'>".'>|'."</a> </li>"; // Goto last page
          echo "</ul>";
          mysqli_close($dbC);
         ?>
      </div>
    </div>
    <div class="" style="float:left;margin-left: 10%;">
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#adduser">Add User</button>
      <button type="button" class="btn btn-info btn-lg" style="margin-left:5px;" data-toggle="modal" data-target="#edituser">Edit User</button>
      <button type="button" class="btn btn-info btn-lg" style="margin-left:5px;" data-toggle="modal" data-target="#deleteuser">Delete User</button>
    </div>
  </div>
<?php include("adduser.php"); ?>

<!-- edit user -->

<div class="modal fade" id="edituser" role="dialog">
  <div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title" style="text-align: center;">Edit User Privilage</h4>
  </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 controldivreg">
          <div class="regform">
           <form action="edituser.php" method="post" id="edituser">
             <div class="form-group">
              <label for="exampleSelect1">User Select</label>
              <select class="form-control" id="userselect" name="userselect">
                <?php include 'config.php';
                $sql="SELECT name,email FROM usr_tab";
                $usr_result=mysqli_query($dbC, $sql);
                while($row = mysqli_fetch_array($usr_result)) {
                echo "<option value=\"" . $row['email'] . "\">" . $row['name'] . "</option>";
              }
                ?>
              </select>
            </div>
             <fieldset class="form-group">
               <label for="Password1"> Password </label>
               <input type="password" class="form-control" id="pass_val" name="pass1" placeholder="Password" required>
             </fieldset>
             <fieldset class="form-group">
             <label for="usertype"> User Type </label></br>
             <div class="checkbox">
               <label>
                  <input type="checkbox" name="usertype">Admin</label>
              </div>
              <small class="text-muted">Check this box if it is Admin User.</small>
              </fieldset>
              <button type="submit" class="btn btn-primary" style="margin-left:40%;">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<!-- delte user -->

<div class="modal fade" id="deleteuser" role="dialog">
  <div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title" style="text-align: center;">Edit User Privilage</h4>
  </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 controldivreg">
          <div class="regform">
           <form action="deleteuser.php" method="post" id="deleteuser">
             <div class="form-group">
              <label for="exampleSelect1">User Select</label>
              <select class="form-control" id="userselect" name="userselect">
                <?php include 'config.php';
                $sql="SELECT name,email FROM usr_tab";
                $usr_result=mysqli_query($dbC, $sql);
                while($row = mysqli_fetch_array($usr_result)) {
                echo "<option value=\"" . $row['email'] . "\">" . $row['name'] . "</option>";
              }
                ?>
              </select>
            </div>
             <button type="submit" class="btn btn-primary" style="margin-left:40%;">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

</body>
  <?php include("footer.html"); ?>
</html>
