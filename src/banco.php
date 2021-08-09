<?php
  $host = "mysql";
  $username = "root";
  $password = "123456";

  // Cria conexão
  $conn = new mysqli($host, $username, $password);

  // Checa conexão
  if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
  }
?>