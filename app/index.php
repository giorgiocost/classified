<?php require "pages/header.php"; 
require "classes/usuarios.class.php";
require "classes/anuncios.class.php";
$qtdUser = new Usuarios();
$qtdAnuncios = new Anuncios();
 
?>


    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Nós Temos hoje <? echo $qtdAnuncios->getQuantidadeAnuncios(); ?> anúncios.</h2>
            <p>E mais de <? echo $qtdUser->getQuantidadeUsuariosCadastrados(); ?> usuários cadastrados.</p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h4>Pesquisa Avançadas.</h4>
            </div>
            <div class="col-sm-9">
                <h4>Últimos anúncios.</h4>
            </div>
        </div>
    </div>
<?php require "pages/footer.php"; ?>
