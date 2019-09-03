<?php
	$sellarname = $_POST['uname'];
	$itemname = $_POST['itemname'];
 	$cost= $_POST['cost'];
 	$locality = $_POST['city'];

 	$conn =new mysqli('localhost','root','','olx');
	if($conn->connect_error)
	{ die('unable to connect'.$conn->connect_error);
	}
	else
	{
	$stmt=$conn->prepare("insert into ads(sellarname,itemname,cost,city) values(?,?,?,?)");
	$stmt->bind_param('ssis',$sellarname,$itemname,$cost,$locality);
	$stmt->execute(); 
	echo "ad accepted!!!";
 	$stmt->close();
 	$conn->close();
 	}
?>