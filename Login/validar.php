<?php
require_once('conexion.php');
$username = $_POST["user"];
$password = $_POST["password"];
$sql = "SELECT id, Usuario , Password FROM usuarios where usuario = '$username' and Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  session_start();
  $_SESSION['varname'] = $username;
  echo "<script>window.location = '../Home/index.php'</script>";
  }
else {
  echo "<script> alert('Usuario o Contraseña erroneos')
  window.location = 'index.php';
  </script>";
}
$conn->close();
?>