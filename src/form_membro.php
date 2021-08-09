<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("location:http://localhost:8081/index.html");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Academia Batata Doce</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="iLand Multipurpose Landing Page Template">
  <meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <!-- Recursos de estilo -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
        <h2>Dados do Membro</h2>
        <form action="cadastro_membro.php" method="POST">
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
                    <td>ID do Pagamento:</td>
                    <td><input type="text" name="idPagamento" size="50" value=""></td>
                </tr>
                <tr>
                    <td>ID do Treinador:</td>
                    <td><input type="text" name="idTreinador" size="50" value=""></td>
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