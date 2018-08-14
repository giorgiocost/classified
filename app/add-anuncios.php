<?php 
    require "pages/header.php";
    if(empty($_SESSION['cLogin'])){
		
?>
		<script type="text/javascript">window.location.href="login.php";</script>
<?php
		exit;
	}

	require "classes/anuncios.class.php";
	

	if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
		$a = new Anuncios();

		$titulo = addslashes($_POST['titulo']);
		$categoria = addslashes($_POST['categoria']);		
		$descricao = addslashes($_POST['descricao']);
		$valor = addslashes($_POST['valor']);
		$estado = addslashes($_POST['estado']);

		$a->addAnuncios($titulo, $categoria, $valor, $descricao,  $estado);
		
		?>
			<div class="alert alert-success">
				Produto adicionado com sucesso !
			</div>
		<?php
	}else{

		?>
			<div class="alert">
				Produto não foi cadastrado.
			</div>
		<?php
	}

	
?>



<div class="container">
<h1>Meus Anúncios - Adicionar Anúncios</h1>
<form method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label for="categoria">Categoria:</label>
		<select name="categoria" id="categoria" class="form-control">
			<?php
				require "classes/categorias.class.php";
				$c = new Categorias();
				$cats = $c->getLista();
	
				foreach($cats as $cat){
			?>
				<option value="<?php echo $cat['id'];?>"><?php echo  utf8_encode($cat['nome']);?></option>
			<?php
				}
			?>	
		</select>
	</div>
	<div class="form-group">
		<label for="titulo">Título:</label>
		<input type="text" name="titulo" id="titulo" class="form-control" />
	</div>
	<div class="form-group">
		<label for="valor">Valor:</label>
		<input type="text" name="valor" id="valor" class="form-control" />
	</div>
	<div class="form-group">
		<label for="descricao">Descrição:</label>
		<input type="text" name="descricao" id="descricao" class="form-control" />
	</div>
	<div class="form-group">
		<label for="estado">Estado de Conservação:</label>
		<select name="estado" id="estado" class="form-control">
			<option value="0">Ruim</option>
			<option value="1">Bom</option>	
			<option value="2">Ótimo</option>		
		</select>
	</div>
		<input type="submit" value="Salvar" class="btn btn-default" />
	</form>
</div>


<?php require "pages/footer.php";?>