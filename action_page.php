<?php
$username=$_POST['uname'];
$password=$_POST['psw'];
$email=$_POST['email'];
 if(!empty($username) || !empty($password) || !empty($email)){
 	$host="localhost";
 	$dbUsername="root";
 	$dbpassword="";
 	$dbname="login";
 	$conn =new mysqli($host,$hostname,$dbpassword,$dbname)
 	if(mysqli_connect_error()){
 		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
 	}
 	else
 	{
 		$SELECT="SELECT email from login where email=? Limit 1";
 		$INSERT ="INSERT Into login(username,password,email) values(?,?,?)";
 		$stmt=$conn->prepare($SELECT);
 		$stmt->bind_param("s",$email);
 		stmt->execute();
 		stmt->bind_result($email);
 		$stmt->store_result();
 		$rnum=$stmt->num_rows;
 		if($rnum==0){
 			$stmt->close();
 			$stmt=$conn->prepare($INSERT);
 			$stmt->bind_param("ssss",$username,$password,$email);
 			$stmt->execute();
 			echo"new record created";
 		}
 		else{
 			echo"someone already registered";
 		}

 		$stmt->close();
 		$conn->close();
 	}
 else{
 	echo "all fields required";
 	die();
 }
?>
