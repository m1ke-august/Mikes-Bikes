<?php
	
session_start();



$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'mikesbikes');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$s = " select * from usertable where user = '$user' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['user'] = $user;
	header('location:index.php');

}else{
	header('location:includes/login.php');
}	
	
?>	