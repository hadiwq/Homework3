<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>



<body>
    <h1>Course and Class</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Course Name</th>
      <th>Building</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "165.227.18.177";
$username = "alqadiou";
$password = "1[L0B2U1kkqXh*";
$dbname = "alqadiou_homework3";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
  
  $sql = "SELECT s.description, c.room_building FROM classroom c JOIN course s on c.school_id = s.school_id WHERE s.school_id=";
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  
while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["description"]."</td><td>".$row["room_building"]."</td></tr>";
  }
  echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    
  </body>
  </html>
