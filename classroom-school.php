<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classroom-School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Sections</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Room Number</th>
      <th>Room Building</th>
      <th>School ID</th>
      <th>School Name</th>
      
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
$id = $_POST['id'];
    
$sql = 
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["Room Number"]?></td>
    <td><?=$row["Room Building"]?></td>
    <td><?=$row["School ID"]?></td>
    <td><?=$row["School Name"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
