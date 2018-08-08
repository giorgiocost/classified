<?php require "./config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classificados</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">Classificados</a>
            </div>
            <ul class="nav navbar-nav navbar-right">

        <?php     
            if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){
                $nome = $_SESSION['cLogin'];  
        ?>
                <li><strong><?php echo "Bem vindo ".$nome ?></strong></li>
                <li><a href="meus-anuncios.php">Meus Anúncios</a></li>
                <li><a href="sair.php">Sair</a></li>
        <?php 
            }else{ 
        ?>
                <li><a href="cadastre-se.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
        <?php 
            } 
        ?>
   
            </ul>
        </div>
    </nav>