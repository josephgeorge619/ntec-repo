<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
ob_end_flush();
header("location:../index.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>
