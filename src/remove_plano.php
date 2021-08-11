<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<?php
require 'banco.php';

$id = $_GET['idPlano'];
$sql = "DELETE FROM `academia`.`planos`WHERE `idPlano` = $id";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    echo "Plano removido!";
} else {
    echo "Erro ao tentar remover plano!";
}

$conn->close();

?>