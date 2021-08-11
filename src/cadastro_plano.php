<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
        <?php
        require 'banco.php';

        $nome = $_POST['nome'];
        $valor = $_POST['valor'];

        $sql = "INSERT INTO `academia`.`planos` (`nome`,`valor`) VALUES ";
        $sql .= "('$nome','$valor')";
        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo "Plano cadastrado com sucesso!";
        } else {
            echo "Erro ao tentar cadastrar plano!";
        }

        $conn->close();
      
        ?>