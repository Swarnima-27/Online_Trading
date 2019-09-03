<?php
		$conn = mysqli_connect("localhost","root","","olx");
		if($conn->connect_error)
		{
			
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM signup";
		$result=$conn->query($sql);
		if($result->num_rows>0){
			while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["username"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["cost"]."</td><td>".$row["city"]."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 RESULTS";
		}
		$conn->close();
?>