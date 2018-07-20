<?php

session_start();

define( 'MYSQL_HOST', 'mysqldd' );
define( 'MYSQL_USER', 'giorgio' );
define( 'MYSQL_PASSWORD', 'giorgio' );
define( 'MYSQL_DB_NAME', 'classificados' );

try{
    $pdo = new PDO( 'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME.';port=3306', MYSQL_USER, MYSQL_PASSWORD );    
}catch(PDOException $e){
    echo "Falhou:".$e->getMessage();
    exit;
}