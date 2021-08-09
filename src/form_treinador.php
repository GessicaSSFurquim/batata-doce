<?php
session_start();
if(!isset($_SESSION['usuario'])){
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
    <link rel="stylesheet" type="text/css" href="http://localhost:8081/estilos/form_treinador.css" />
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
                acc[i].addEventListener("click", function () {
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
        <h2>Dados do Treinador</h2>
        <form action="cadastro_treinador.php" method="POST">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" size="50" value=""></td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type="text" name="dataDeNascimento" size="50" value=""></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf" size="50" value=""></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" name="endereco" size="50" value=""></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" size="50" value=""></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email" size="50" value=""></td>
                </tr>
                <tr>
                    <td>ID de Pagamento:</td>
                    <td><input type="text" name="idPagamento" size="50" value=""></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Limpar"></td>
                    <td><input type="submit" value="Enviar Dados"></td>
                </tr>
            </table>
        </form>
    </main>
    <footer>
        <p></p>
    </footer>
</body>

</html>