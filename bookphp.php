<?php
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
 	$cost= $_POST['cost'];
 	$city = $_POST['locality'];

 	$conn =new mysqli('localhost','root','','olx');
	if($conn->connect_error)
	{ die('unable to connect'.$conn->connect_error);
	}
	else
	{
	$stmt=$conn->prepare("insert into books(username,phone,email,cost,city) values(?,?,?,?,?)");
	$stmt->bind_param('sisis',$username,$phone,$email,$cost,$city);
	$stmt->execute(); 
	echo "ad accepted!!!";
 	$stmt->close();
 	$conn->close();
 	}
?>