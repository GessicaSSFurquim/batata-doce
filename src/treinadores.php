<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Treinadores</title>

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
        <a class="btn btn-secondary" href="/admin.php" role="button">Voltar</a>
            <div class="py-5 text-center">
                <h2>Treinadores</h2>
            </div>
                <?php
                require 'banco.php';
                $sql = "SELECT * FROM `academia`.`treinadores`";
                $treinadores = $conn->query($sql);

                if ($treinadores->num_rows == 0) {
                    echo "<p>Nenhum treinador encontrado</p>";
                } else {
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "<td><b>Nome</b></td>";
                    echo "<td><b>Data de nascimento</b></td>";
                    echo "<td><b>CPF</b></td>";
                    echo "<td><b>Endereço</b></td>";
                    echo "<td><b>Telefone</b></td>";
                    echo "<td><b>Email</b></td>";
                    echo "<td><b>Planos</b></td>";
                    echo "<td><b>Edição</b></td>";
                    echo "<td><b>Remoção</b></td>";
                    echo "</tr>";

                    while ($treinador = $treinadores->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>$treinador[nome]</td>";
                        echo "<td>$treinador[dataDeNascimento]</td>";
                        echo "<td>$treinador[cpf]</td>";
                        echo "<td>$treinador[endereco]</td>";
                        echo "<td>$treinador[telefone]</td>";
                        echo "<td>$treinador[email]</td>";
                        echo "<td>$treinador[idPlano]</td>";
                        echo "<td><a href='form_edita_treinador.php?idTreinador=$treinador[idTreinador]'>Editar</a></td>";
                        echo "<td><a href='remove_treinador.php?idTreinador=$treinador[idTreinador]'>Remover</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                $conn->close();
                ?>
    </div>
    </main>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/form-validation.js"></script>
</body>

</html>