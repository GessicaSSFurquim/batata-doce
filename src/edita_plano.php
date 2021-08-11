<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<?php
require 'banco.php';

$id = $_POST['idPlano'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];

$sql = "UPDATE `academia`.`planos` SET `nome` = '$nome',`valor` = '$valor' WHERE `idPlano` = $id";
$conn->query($sql);

if ($conn->affected_rows > 0) {
    echo "Plano alterado!";
} else {
    echo "Erro ao tentar alterar plano!";
}

$conn->close();

?>