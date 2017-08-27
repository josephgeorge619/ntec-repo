<?php
#define(DOC_ROOT,dirname(__FILE__)); // To properly get the config.php file
//$DOC_ROOT = $_SERVER['DOCUMENT_ROOT'];
$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include 'config.php'; //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    // echo "$dbName";
    // ob_flush();
    // flush();
    // sleep(10);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM usr_tab WHERE user_name='$myusername' and user_pass=SHA('$mypassword')";
    $result=mysqli_query($dbC, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    $rs=mysqli_fetch_array($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
#        session_start()
//        session_register("admin");
//        session_register("password")
    //    $_SESSION['password']=$mypassword;
        if($myusername=='admin')
        {
          session_start();
          $_SESSION["login_user"]=$myusername;
          header("location:admin.php");
        }
        else {
          session_start();
          $_SESSION['login_user']=$myusername;
          header("location:../resources/assignment1/home.php");
        }
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=Please enter some username and password");
}
?>
