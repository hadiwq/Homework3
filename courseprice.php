<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "165.227.18.177";
$username = "alqadiou";
$password = "1[L0B2U1kkqXh*";
$dbname = "alqadiou_homework3";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
  
  $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>Course ID</th><th>Prefix</th><th>Course Name</th><th>School ID</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>a href="test.html"<td>".$row["course_id"]."</td><td>".$row["prefix"]."</td><td>".$row["description"]."</td><td>".$row["school_id"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>
