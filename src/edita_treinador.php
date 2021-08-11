<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<?php
require 'banco.php';

$id = $_POST['idTreinador'];
$nome = $_POST['nome'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$idPlano = $_POST['idPlano'];

// echo $id, $nome, $dataDeNascimento, $cpf, $endereco, $telefone, $email, $idPlano;
	
$sql = "UPDATE `academia`.`treinadores` SET `nome` = '$nome',`dataDeNascimento` = '$dataDeNascimento',`cpf` = '$cpf',`endereco` = '$endereco',`telefone` = '$telefone',`email` = '$email',`idPlano` = '$idPlano' WHERE `idTreinador` = $id";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    echo "Treinador alterado!";
} else {
    echo "Erro ao tentar alterar treinador!";
}

$conn->close();

?>