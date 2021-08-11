<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
        <?php
        require 'banco.php';

        $nome = $_POST['nome'];
        $dataDeNascimento = $_POST['dataDeNascimento'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $idPlano = $_POST['idPlano'];

        $sql = "INSERT INTO `academia`.`treinadores` (`nome`, `dataDeNascimento`, `cpf`, `endereco`, `telefone`, `email`, `idPlano`) VALUES ";
        $sql .= "('$nome', '$dataDeNascimento','$cpf', '$endereco', '$telefone' ,'$email', '$idPlano')";
        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo "Treinador cadastrado com sucesso!";
        } else {
            echo "Erro ao tentar cadastrar treinador!";
        }

        $conn->close();

        ?>