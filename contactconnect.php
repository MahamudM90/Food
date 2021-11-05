<?php

$link = mysqli_connect("localhost","root","","food");

if($link===false){
	die("ERROR:Could not connect.".mysqli_connect_error());
}


	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message= $_POST['message'];
	


$sql = "insert into contactform(name,email,subject,message) values('$name','$email','$subject','$message')";

if(mysqli_query($link,$sql))
{
	
	echo"record insert successfully";
	header('location:index.php');
}
else{
	echo"error ".mysqli_error($link);
}
mysqli_close($link);

?>



