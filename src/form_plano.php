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
    <title>Form Plano</title>

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
                <h2>Cadastro de Planos</h2>
            </div>
            <div class="col-md-7 col-lg-10">
                <h4 class="mb-3">Dados do Novo Plano</h4>
                <form class="needs-validation" novalidate action="cadastro_plano.php" method="POST">

                    <div class="row g-3">
                    <div class="col-12">
                            <label for="firstName" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="firstName" placeholder="Nome do plano" value="" required>
                            <div class="invalid-feedback">
                                Por favor, insira um nome.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="valor" class="form-label">Valor<span class="text-muted"></span></label>
                            <input type="text" name="valor" class="form-control" id="valor">
                            <div class="invalid-feedback">
                                Por favor, insira um valor.
                            </div>
                        </div>

                        <div>
                            <button class="w-25 btn btn-secondary btn-sm" type="reset">Limpar</button>
                            <button class="w-25 btn btn-primary btn-sm" type="submit">Cadastrar</button>
                        </div>
                    </div>

                </form>
            </div>
    </div>
    </main>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/form-validation.js"></script>
</body>

</html>