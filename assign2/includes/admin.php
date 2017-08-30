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
        <?php ob_start();
        include 'config.php';
        $sql="SELECT * FROM usr_tab";
        $result=mysqli_query($dbC, $sql);
        $count=mysqli_num_rows($result);
        $pg_no_rw=$count/2;
        $pg_no=ceil($pg_no_rw);
        $x=1;
        echo "<div class=\"col-md-5\">";
        while($x <= $pg_no) {
        echo "<ul class=\"pagination pagination\">
          <li><a href=\"#" . $x . "\" target=\"_blank\">" . $x . "</a></li>
          </ul>";
          $x++;
        }
        echo "</div>";
        echo "<table class=\"table table-hover table-bordered\">
          <thead>
          <tr class=\"row\">
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Age</th>
          </tr>
          </thead>";
        function pg_query($limit,$offset){
          include 'config.php';
          $sql="SELECT * FROM usr_tab ORDER BY age LIMIT $limit OFFSET $offset";
          $result=mysqli_query($dbC, $sql);
          return $result;
        }
        $x=0;
        $step=2;
        $off=0;
        while ($x < $pg_no) {
          $pg_rs=pg_query($step,$off);
          $off=$off+$step;
          $x++;
          echo "<tbody id=\"$x\">";
          while($row = mysqli_fetch_array($pg_rs)) {
            echo "<tr class=\"row\">";
            echo "<td>";
            echo $row['name'];
            echo "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "</tr>";
          }
          echo "</tbody>";
        }

        // while($row = mysqli_fetch_array($result)) {
        //     echo "<tr class=\"row\">";
        //     echo "<td>";
        //     echo $row['name'];
        //     echo "</td>";
        //     echo "<td>" . $row['phone'] . "</td>";
        //     echo "<td>" . $row['email'] . "</td>";
        //     echo "<td>" . $row['age'] . "</td>";
        //     echo "</tr>";
        //   }

          echo "</table>";
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
