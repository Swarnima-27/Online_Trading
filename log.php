<?php
	
 	$username = $_POST['uname'];
 	$password = $_POST['psw'];
 	$email = $_POST['email'];

 	$conn =new mysqli('localhost','root','','olx');
	if($conn->connect_error)
	{ die('unable to connect'.$conn->connect_error);
	}
	else
	{
	$stmt=$conn->prepare("insert into login(username,psw,email) values(?,?,?)");
	$stmt->bind_param('sss',$username,$password,$email);
	$stmt->execute();
	echo "welcome!!!"; 
 	$stmt->close();
 	$conn->close();
 	}
?>