<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/index.html");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>DWE I5 - Leitura de Dados em PHP</title>
    <meta charset="utf-8">
    <!-- Fontes do Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost:8081/estilos/form_pagamento.css" />
</head>

<body>
    <header>
        <h1>Academia Batata Doce</h1>
    </header>
    <nav>
        <p></p>
    </nav>
    <content>
        <button class="accordion">
            <h3>Membros</h3>
        </button>
        <div class="panel">
            <p>Adicionar novo membro</p>
            <p>Ver todos os membros</p>
        </div>

        <button class="accordion">
            <h3>Pagamentos</h3>
        </button>
        <div class="panel">
            <p>Adicionar novo pagamento</p>
            <p>Ver todos os pagamentos</p>
        </div>

        <button class="accordion">
            <h3>Treinadores</h3>
        </button>
        <div class="panel">
            <p>Adicionar novo treinador</p>
            <p>Ver todos os treinadores</p>
        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
    </content>
    <main>
        <?php
        require 'banco.php';

        $valor = $_POST['valor'];

        $sql = "INSERT INTO `academia`.`pagamentos` (`valor`) VALUES ";
        $sql .= "('$valor')";
        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo "Pagamento cadastrado com sucesso!";
        } else {
            echo "Erro ao tentar cadastrar pagamento!";
        }

        $conn->close();
      
        ?>
        <br>
        <a href='form_pagamento.php'>Voltar</a><br>

    </main>
    <footer>
        <p></p>
    </footer>
</body>

</html>