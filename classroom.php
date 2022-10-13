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
  
  $sql = "SELECT course.course_id, course.school_id, school.school_name FROM course INNER JOIN school on course.school_id=school.school_id";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>School ID</th><th>School Name</th></tr>";
  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["school_id"]."</td><td>".$row["school_name"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>
