<?php
require_once('conexion.php');
$username = $_POST["user"];
$password = $_POST["password"];
$sql = "INSERT INTO Usuarios (Usuario, Password)
VALUES ('$username', '$password')"; 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>