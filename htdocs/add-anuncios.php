<?php 
    require "pages/header.php";
    session_start();
?>



<div class="container">
<form method="POST">
		<div class="form-group">
			<label for="imagem">imagem:</label>
			<input type="text" name="imagem" id="imagem" class="form-control" />
		</div>
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
		<div class="form-group">
			<label for="telefone">Telefone:</label>
			<input type="text" name="telefone" id="telefone" class="form-control" />
		</div>
		<input type="submit" value="Cadastrar" class="btn btn-default" />
	</form>
</div>


<?php require "pages/footer.php";?>