<?php 
    require "pages/header.php";
    if(empty($_SESSION['cLogin'])){
		
?>
		<script type="text/javascript">window.location.href="login.php";</script>
<?php
		exit;
	}

	require "classes/anuncios.class.php";
	$a = new Anuncios();

	$titulo = $_POST['titulo'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	
    $a->updateAnuncios($_GET['id'], $titulo, $valor, $descricao);

?>

<div class="container">
<h1>Meus Anúncios - Atualizar Anúncios</h1>
<form method="POST" enctype="multipart/form-data">


<?php
?>


	<div class="form-group">
		<label for="titulo">Título:</label>
		<input type="text" name="titulo" id="titulo" class="form-control"  value="<? echo $_SESSION['titulo']; ?>"/>
	</div>
	<div class="form-group">
		<label for="valor">Valor:</label>
		<input type="text" name="valor" id="valor" value="<? echo $_SESSION['valor']; ?>" class="form-control" />
	</div>
	<div class="form-group">
		<label for="descricao">Descrição:</label>
		<input type="text" name="descricao" id="descricao" value="<? echo $_SESSION['descricao']; ?>" class="form-control" />
	</div>
	
		<input type="submit" value="Atualizar" class="btn btn-default" />
	</form>
</div>


<?php require "pages/footer.php";?>