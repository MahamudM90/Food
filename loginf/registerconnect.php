<?php

$link = mysqli_connect("localhost","root","","food");

if($link===false){
	die("ERROR:Could not connect.".mysqli_connect_error());
}



	$username = $_POST['username'];
	$password = $_POST['password'];
	

$sql = "insert into login(username,password) values('$username','$password')";

if(mysqli_query($link,$sql))
{
	
	echo"Registration Successfull";
}
else{
	echo"error".mysqli_error($link);
}
mysqli_close($link);

?>



