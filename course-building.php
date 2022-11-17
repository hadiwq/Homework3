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
    $iid = $_POST['school_id'];
  
  $sql = "SELECT c.description, b.room_building
FROM course c JOIN classroom b ON c.school_id = b.school_id
WHERE c.school_id=" . $iid;
   
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  
while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?=$row["description"]?></td>
    <td><?=$row["room_building"]?></td>
  </tr>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
