<?php
	
session_start();



$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'mikesbikes');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$s = " select * from usertable where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['username'] = $username;
	header('location:index.html');
}else{
	header('location:includes/login.html');
}	
	
?>	