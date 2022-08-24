<?php
	
session_start();
header('location:includes/signup.html');


$con = mysqli_connect('localhost', 'root','');

mysqli_select_db($con, 'mikesbikes');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];


$s = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo" Username Already Taken";
}else{
	$reg = " insert into usertable(firstName, lastName, username, email, mobile, password) values ('$firstName', '$lastName', $username, '$email', '$mobile', '$password')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}	
	
?>	