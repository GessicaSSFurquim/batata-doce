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
        $idTreinador = $_POST['idTreinador'];

        // echo $nome, $dataDeNascimento, $cpf, $endereco, $telefone, $email, $idPagamento, $idTreinador;

        $sql = "INSERT INTO `academia`.`membros` (`nome`, `dataDeNascimento`, `cpf`, `endereco`, `telefone`, `email`, `idPlano`,`idTreinador`) VALUES ";
        $sql .= "('$nome', '$dataDeNascimento','$cpf', '$endereco', '$telefone' ,'$email', '$idPlano', '$idTreinador')";
        // echo $sql;
        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo "Membro cadastrado com sucesso!";
        } else {
            echo "Erro ao tentar cadastrar membro!";
        }

        $conn->close();
      
        ?>