<?php
require 'pages/header.php';
require "classes/anuncios.class.php";

$e = new Anuncios();


if(!empty($_SESSION['cLogin'])){
if(!empty($_GET['id'])){
    $e->deleteAnuncios($_GET['id']);
}
}
?>
<script type="text/javascript">window.location.href="meus-anuncios.php";</script>
