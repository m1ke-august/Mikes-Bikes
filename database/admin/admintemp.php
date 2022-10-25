<?php
	
session_start();


$con = mysqli_connect('localhost', 'root','');

mysqli_select_db($con, 'mikesbikes');

$user = $_POST['user'];
$pass = $_POST['pass'];



$s = " select * from admin where user = '$user'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo" Username Already Taken";
}else{
	$reg = " insert into admin(user, pass) values ('$user', '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}	
	
?>	