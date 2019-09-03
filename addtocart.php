<!DOCTYPE html>
<html>
<head>
	<style>
	table, th
{
	border:1px solid black;
}
</style>
</head>
<body>
	<img src="https://cdn-images-1.medium.com/max/1600/1*Hu9yQKFUY_HL_Q_9Pfbwfw.jpeg" style="width:70%; height:350px; align:center; margin-left:250px;" >

<br>
<br>
	<table>
		<tr>
			<th>username</th>
			<th>itemname</th>
			<th>email</th>
			<th>cost</th>
			<th>city</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","olx");
		if($conn-> connect_error)
		{
			
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM ads" ;

		$result =$conn->query($sql);
		if($result-> num_rows > 0){
			while($row =  $result-> fetch_assoc()){
				echo "<tr><td>".$row["username"]."</td><td>".$row["itemname"]."</td><td>".$row["email"]."</td><td>".$row["cost"]."</td><td>".$row["city"]."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 RESULTS";
		}
		$conn->close();
?>

</table>
</body>
</html>