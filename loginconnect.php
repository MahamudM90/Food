<?php

session_start();
$con= mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}
else{
	echo" no connection";
	}
	$db = mysqli_select_db($con,'food');

if ( isset($_POST['Login'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select * from login where username = '$username' and password='$password' ";
	$query = mysqli_query($con,$sql);
	
	$row = mysqli_num_rows($query);
		
		if($row == 1){
			echo"login Successful";
			$_SESSION['username']= $username;
			$_SESSION['password']= $password;
			header('location:index.php');
		}
		else{
			echo"login Faild";
			header('location:login.php');
		}
	
}
?>
