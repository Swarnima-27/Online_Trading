<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
 	$username = $_POST['uname'];
 	$password = $_POST['psw'];
 	$email = $_POST['email'];

 	$conn =new mysqli('localhost','root','','olx');
	if($conn->connect_error)
	{ die('unable to connect'.$conn->connect_error);
	}
	else
	{
	$stmt=$conn->prepare("insert into signup(firstname,lastname,username,password,email) values(?,?,?,?,?)");
	$stmt->bind_param('sssss',$firstname,$lastname,$username,$password,$email);
	$stmt->execute(); 
 	$stmt->close();
 	$conn->close();
 	}
?>