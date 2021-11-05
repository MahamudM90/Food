<?php

$link = mysqli_connect("localhost","root","","food");

if($link===false){
	die("ERROR:Could not connect.".mysqli_connect_error());
}


	$tnum = $_POST['tnum'];
	$fmenu = $_POST['fmenu'];
	$itnum = $_POST['itnum'];
	$itqnty= $_POST['itqnty'];
	


$sql = "insert into orderform(tnum,fmenu,itnum,itqnty) values('$tnum','$fmenu','$itnum','$itqnty')";

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



