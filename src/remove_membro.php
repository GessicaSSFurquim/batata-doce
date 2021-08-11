<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<?php
require 'banco.php';

$id = $_GET['idMembro'];
	
$sql = "DELETE FROM `academia`.`membros`WHERE `idMembro` = $id";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    echo "Membro removido!";
} else {
    echo "Erro ao tentar remover membro!";
}

$conn->close();

?>