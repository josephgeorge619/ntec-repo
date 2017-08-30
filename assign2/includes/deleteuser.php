<?php
$email=$_POST["userselect"];
include 'config.php';
$sql="DELETE FROM `usr_tab` WHERE email='$email'";
$result=mysqli_query($dbC, $sql);
header("location:admin.php");
?>
