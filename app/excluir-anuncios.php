<?php
require 'pages/header.php';
require "classes/anuncios.class.php";


$e = new Anuncios();
if(!empty($_GET['id'])){

    echo intval($_GET['id']);
    
    $e->excluirAnuncios($_GET['id']);
}
?>

<script type="text/javascript">window.location.href="meus-anuncios.php";</script>
