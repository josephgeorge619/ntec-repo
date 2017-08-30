<html>
<body>
<?php
$name = $_POST["name_first"] . ' ' . $_POST["name_mid"] . ' ' . $_POST["name_last"];
$email=$_POST["email1"];
$password=$_POST["pass1"];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$postbox=$_POST['pobox'];
$country=$_POST['country'];
$age=$_POST['age'];
$gender=$_POST['gender'];
echo "values : $name $email $password $phone $address $city $postbox $country $age $gender";
ob_start();
include 'config.php';
if(!isset($_POST['usertype']))
{
$sql="INSERT INTO usr_tab (`name`, `email`, `user_pass`, `phone`, `address`, `city`, `postbox`, `country`, `age`, `gender`, `role`) VALUES ('$name', '$email', md5('$password'), '$phone', '$address', '$city', '$postbox', '$country', '$age', '$gender', 'user')";
}
else {
$sql="INSERT INTO usr_tab (`name`, `email`, `user_pass`, `phone`, `address`, `city`, `postbox`, `country`, `age`, `gender`, `role`) VALUES ('$name', '$email', md5('$password'), '$phone', '$address', '$city', '$postbox', '$country', '$age', '$gender', 'admin')";
}
$result=mysqli_query($dbC, $sql);
header("location:login_reg.php");
ob_end_flush();
?>
</body>
</html>
