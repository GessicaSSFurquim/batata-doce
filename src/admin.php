<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:http://localhost:8081/form_login.html");
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
    <div class="wrapper">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle
                                navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <!-- Coleção os links de navegação, formulários e outros conteúdos para alternar-->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" float>
                                <li><a class="page-scroll" href="#main">Home</a></li>
                                <li><a class="page-scroll" href="logout.php">Sair</a></li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>

        <div class="main app form" id="main">
            <!-- Seção Classes -->
            <div class="pitch text-center" id="classes">
                <div class="container">
                    <div class="pitch-intro">
                        <h1 class="wow fadeInDown" data-wow-delay="0.2s">Área de administração</h1>
                    </div>
                    <div class="col-md-12">
                        
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1><a href="membros.php" style="text-decoration:none">Membros</a></h1>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1><a href="planos.php" style="text-decoration:none">Planos</a></h1>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1><a href="treinadores.php" style="text-decoration:none">Treinadores</a></h1>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1><a href="form_membro.php" style="text-decoration:none">Cadastrar Membros</a></h1>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1><a href="form_plano.php" style="text-decoration:none">Cadastrar Planos</a></h1>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1><a href="form_treinador.php" style="text-decoration:none">Cadastrar Treinadores</a></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Volta ao topo-->
        <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a>
    </div>

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="js/jquery.subscribe.js"></script>
</body>

</html>