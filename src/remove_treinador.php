<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<?php
require 'banco.php';

$id = $_GET['idTreinador'];

$sql = "DELETE FROM `academia`.`treinadores` WHERE `idTreinador` = $id";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    echo "Treinador removido!";
} else {
    echo "Erro ao tentar remover treinador!";
}

$conn->close();

?>