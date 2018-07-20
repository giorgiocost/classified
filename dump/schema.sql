
CREATE DATABASE IF NOT EXISTS classificados;

USE classificados;

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuarios INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS categorias (
    id_categorias INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS anuncios (
    id_anuncios INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_usuarios INT NOT NULL,
    id_categorias INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    valor FLOAT NOT NULL,
    estado INT(11) NOT NULL
);