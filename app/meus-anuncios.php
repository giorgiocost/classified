<?php require "pages/header.php"; ?>
<?php 
    if(empty($_SESSION['cLogin'])){
?>
       <script type="text/javascript">window.location.href="login.php";</script>
<?php
       exit;
    }
?>

<div class="container">
<h1>Meus Anúncios</h1>


<a href="add-anuncios.php" class="btn btn-default">Adicionar Anúncio</a>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Título</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <?php
        require "classes/anuncios.class.php";
        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();
        
            foreach($anuncios as $anuncio){

                 
    ?>
        <tr>
                <td>
                <?php 
                    if(!$anuncio['url_anuncios'] == ""){
                ?>
                    <img src="assets/img/anuncios/<?php echo $anuncio['url_anuncios']; ?>"  alt="" width="50"/>
                <?php
                }else{
                ?>    
                    <img src="assets/img/anuncios/default.png"  alt="" width="50"/>
                    <?php
                }
                ?>
                </td>
                <td><?php echo $anuncio['titulo'];?></td>
                <td>R$ <?php echo number_format($anuncio['valor'],2);?></td>
                <td></td>
        </tr>
    <?php            
            }
    ?>
  
</table>
</div>
<?php require "pages/footer.php"; ?>