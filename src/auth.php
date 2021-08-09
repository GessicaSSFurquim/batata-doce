<?php
session_start();

require 'banco.php';

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT * FROM `academia`.`login` WHERE usuario='$usuario' AND senha='$senha'";
$resultado = $conn->query($query);

if ($resultado->num_rows == 1) {
  $linha = $resultado->fetch_assoc();
  $_SESSION['usuario'] = $linha['usuario'];
  header("location:http://localhost:8081/bem_vindo.php");
} else {
  header("location:http://localhost:8081/index.html");
}
$conn->close();
?>