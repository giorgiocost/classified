<?php

session_start();

class Anuncios{
    public function getMeusAnuncios(){
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM anuncios WHERE id_usuarios = :id_usuarios ");
        $sql->bindValue(":id_usuarios", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;

    }
}