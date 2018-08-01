<?php require "pages/header.php"; ?>

<div class="container">
    <h1>Login</h1>

    <?php 
        require "classes/usuarios.class.php";
    
        $u = new Usuarios();

        if(isset($_POST['email']) && !empty($_POST['email']) && !empty($_POST['senha'])){

            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if($u->logar($email,$senha)){
    ?>
        <script type="text/javascript">window.location.href="./";</script>
    <?php
            }else{
    ?>
        <div class="alert alert-danger">
                Usuário e/ou Senha errados!
        </div>
    <?php
            }
        }
    ?>

    <form method="POST">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <input type="submit" value="Login" class="btn btn-default">

    </form>
</div>

<?php require "pages/footer.php"; ?>