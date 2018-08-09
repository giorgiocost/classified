<?php

session_start();

class Anuncios{
    public function getMeusAnuncios(){
        global $pdo;

        $array =[];
        
        $sql = $pdo->prepare("SELECT * FROM anuncios WHERE 
        id_usuarios = :id_usuarios ");
        $sql->bindValue(":id_usuarios", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;

    }

    public function addAnuncios($titulo, $categoria, $valor, $descricao,  $estado){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO anuncios SET 
        titulo = :titulo,
        id_categorias = :id_categorias,
        id_usuarios = :id_usuarios,
        descricao = :descricao, 
        valor = :valor,  
        estado = :estado");
        
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":id_categorias", $categoria);
        $sql->bindValue(":id_usuarios", $_SESSION['cLogin']);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":estado", $estado);
        $sql->execute();
        
    }
}