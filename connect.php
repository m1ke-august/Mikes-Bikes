<?php
	
session_start();
header('location:includes/login.php');


$con = mysqli_connect('localhost', 'root','');

mysqli_select_db($con, 'mikesbikes');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];


$s = " select * from usertable where user = '$user'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo" Username Already Taken";
}else{
	$reg = " insert into usertable(firstName, lastName, user, email, mobile, password) values ('$firstName', '$lastName','$user', '$email', '$mobile', '$password')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}	
	
?>	