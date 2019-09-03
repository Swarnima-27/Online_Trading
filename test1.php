<!DOCTYPE html>
<html>
<head>
  <style>
  table,th,td
  {
    border:2px solid black;
    border-collapse: collapse;
  }
  th, td
  {
    padding:15px;
  }
</style>
</head>
<body>
<img src="https://cdn-images-1.medium.com/max/1600/1*Hu9yQKFUY_HL_Q_9Pfbwfw.jpeg" style="width:70%; height:350px; align:center; margin-left:250px;" >
<br>
<br>

  <table align="center" style="width:75%;">
    <th>username</th>
    <th>phone</th>
    <th>email</th>
    <th>cost</th>
    <th>city</th>

<?php

$conn = new mysqli('localhost','root','','olx');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["cost"]."</td><td>".$row["city"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>