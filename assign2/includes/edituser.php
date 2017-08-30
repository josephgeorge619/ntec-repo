<?php
$email=$_POST["userselect"];
$password=$_POST["pass1"];
include 'config.php';
if(!isset($_POST['usertype']))
{
  $sql="UPDATE `usr_tab` SET `role`='user',`user_pass`=md5('$password') WHERE email='$email'";
  }
else {
  $sql="UPDATE `usr_tab` SET `role`='admin',`user_pass`=md5('$password') WHERE email='$email'";
}
echo $sql;
$result=mysqli_query($dbC, $sql);
header("location:admin.php");
?>
