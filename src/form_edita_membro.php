<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<?php
if (!isset($_GET['idMembro'])) {
    header("location:http://localhost:8081/membros.php");
}
require 'banco.php';
$id = $_GET['idMembro'];
$sql = "SELECT * FROM `academia`.`membros` WHERE idMembro  = $id";
$membros = $conn->query($sql);
if ($membros->num_rows != 1) {
    header("location:http://localhost:8081/membros.php");
}
$membro = $membros->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Edita membro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Alterar Membros</h2>
            </div>
            <div class="col-md-7 col-lg-10">
                <h4 class="mb-3">Dados do Membro</h4>

                <form class="needs-validation" novalidate action="edita_membro.php" method="POST">
                    <?php
                    echo "<input type='hidden' name='idMembro' value='$membro[idMembro]' required>";
                    ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="firstName" class="form-label">Nome</label>
                            <?php
                            echo "<input type='text' name='nome' class='form-control' id='nome' value='$membro[nome]' required>";
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um nome.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="dataDeNascimento" class="form-label">Data de Nascimento<span class="text-muted"></span></label>
                            <?php
                            echo "<input type='date' name='dataDeNascimento' class='form-control' id='dataDeNascimento' value='$membro[dataDeNascimento]'>";
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira uma data de nascimento.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="cpf" class="form-label">CPF<span class="text-muted"></span></label>
                            <?php
                            echo "<input type='text' name='cpf' class='form-control' id='cpf' value='$membro[cpf]'>";
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um cpf.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Endereço</label>
                            <?php
                            echo "<input type='text' name='endereco' class='form-control' id='address' value='$membro[endereco]' required>";
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um endereço.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="telefone" class="form-label">Telefone<span class="text-muted"></span></label>
                            <?php
                            echo "<input type='text' name='telefone' class='form-control' id='telefone' value='$membro[telefone]'>";
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um telefone.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <?php
                            echo "<input type='email' name='email' class='form-control' id='email' value='$membro[email]'>";
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um email.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">Plano Escolhido</label>
                            <?php
                            require 'banco.php';
                            $sql = "SELECT `idPlano`,`nome` FROM `academia`.`planos`";
                            $planos = $conn->query($sql);

                            if ($planos->num_rows == 0) {
                                echo "<p>Nenhum plano encontrado</p>";
                            } else {
                                echo "<select value='$membro[idPlano]' name='idPlano' class='form-select' id='state' required>";
                                while ($plano = $planos->fetch_assoc()) {
                                    if ($plano['idPlano'] == $membro['idPlano']) {
                                        echo "<option selected value='$plano[idPlano]'>$plano[nome]</option>";
                                    } else {
                                        echo "<option value='$plano[idPlano]'>$plano[nome]</option>";
                                    }
                                }
                                echo "</select>";
                            }
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um plano.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="state" class="form-label">Treinador</label>
                            <?php
                            require 'banco.php';
                            $sql = "SELECT `idTreinador`,`nome` FROM `academia`.`treinadores`";
                            $treinadores = $conn->query($sql);

                            if ($treinadores->num_rows == 0) {
                                echo "<p>Nenhum treinador encontrado</p>";
                            } else {
                                echo "<select value='$membro[idTreinador]' name='idTreinador' class='form-select' id='state' required>";
                                while ($treinador = $treinadores->fetch_assoc()) {
                                    if ($treinador['idTreinador'] == $membro['idTreinador']) {
                                        echo "<option selected value='$treinador[idTreinador]'>$treinador[nome]</option>";
                                    } else {
                                        echo "<option value='$treinador[idTreinador]'>$treinador[nome]</option>";
                                    }
                                }
                                echo "</select>";
                            }
                            ?>
                            <div class="invalid-feedback">
                                Por favor, insira um treinador.
                            </div>
                        </div>

                        <div>
                            <a class="btn btn-secondary" href="/treinadores.php" role="button">Voltar</a>
                            <button class="w-25 btn btn-primary btn-sm" type="submit">Alterar</button>
                        </div>


                </form>
            </div>
    </div>
    </main>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/form-validation.js"></script>
</body>
<?php
$conn->close();
?>

</html>