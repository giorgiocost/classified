<?php

session_start();

class Anuncios{
    public function getMeusAnuncios(){
        global $pdo;

        $array =[];
        
        $sql = $pdo->prepare("SELECT * FROM anuncios WHERE 
        id_usuarios = :id_usuarios ");
        $sql->bindValue(":id_usuarios", $_SESSION['id']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;

    }

    public function addAnuncios($titulo, $categoria, $valor, $descricao,  $estado){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO anuncios (id_usuarios,id_categorias,titulo,descricao,valor,estado) VALUES 
        (:id_usuarios,:id_categorias,:titulo,:descricao,:valor,:estado)");
        
        $sql->bindValue(":id_usuarios", intval($_SESSION['id']));
        $sql->bindValue(":id_categorias", $categoria);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":estado", $estado);
        $sql->execute();
    }
}