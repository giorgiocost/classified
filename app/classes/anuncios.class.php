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

    public function getQuantidadeAnuncios(){
        global $pdo;
        
        $sql = $pdo->prepare("SELECT * FROM anuncios WHERE 
        id_usuarios = :id_usuarios ");
        $sql->bindValue(":id_usuarios", $_SESSION['id']);
        $sql->execute();

        if($sql->rowCount() > 0){
            return count($sql->fetchAll());
        }
    }

    public function postAnuncios($titulo, $categoria, $valor, $descricao,  $estado){
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

    public function deleteAnuncios($id){
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id=:id");
        $sql->bindValue(":id",$id);
        $sql->execute();
    }

    public function updateAnuncios($id, $titulo, $valor, $descricao){
        global $pdo;
        $status = true;

        if($status){
            $sql = $pdo->prepare("SELECT titulo,valor,descricao FROM anuncios WHERE id=:id");
            $sql->bindValue(":id",$id);
            $sql->execute();

            foreach($sql->fetchAll() as $dados){
                $_SESSION['titulo'] = $dados['titulo'];
                $_SESSION['valor'] = $dados['valor'];
                $_SESSION['descricao'] = $dados['descricao'];
            }
        }
            $sql = $pdo->prepare("UPDATE anuncios SET titulo=:titulo, valor=:valor, descricao=:descricao WHERE id=:id");
            $sql->bindValue(":id",$id);
            $sql->bindValue(":titulo", $titulo);
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":descricao", $descricao);
            $sql->execute(); 

            $_SESSION['status'] = true;
    } 
}
