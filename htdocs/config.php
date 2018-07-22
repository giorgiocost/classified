<?php

session_start();

global $pdo;

define( 'MYSQL_HOST', 'mysql' );
define( 'MYSQL_USER', 'giorgio' );
define( 'MYSQL_PASSWORD', 'giorgio' );
define( 'MYSQL_DB_NAME', 'classificados' );

global $pdo;

try{
    $pdo = new PDO( 'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME.';port=3306', MYSQL_USER, MYSQL_PASSWORD );    
}catch(PDOException $e){
    echo "Falhou:".$e->getMessage();
    exit;
}