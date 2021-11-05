<?php

$link = mysqli_connect("localhost","root","","food");

if($link===false){
	die("ERROR:Could not connect.".mysqli_connect_error());
}


	$name = $_POST['name'];
	$email = $_POST['email'];
	$pnumber = $_POST['pnumber'];
	$selectdate = $_POST['selectdate'];
	$npeople = $_POST['npeople'];
	$event = $_POST['event'];


$sql = "insert into reservationform(name,email,pnumber,selectdate,npeople,event) values('$name','$email','$pnumber','$selectdate','$npeople','$event')";

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



