
CREATE DATABASE IF NOT EXISTS classificados;

USE classificados;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(32) NOT NULL,
    telefone VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS categorias (
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS anuncios (
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_usuarios INT(11) NULL,
    id_categorias INT(11) NULL,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    valor FLOAT NOT NULL,
    estado INT(11) NOT NULL,
    url_anuncios VARCHAR(100) NULL
);

INSERT INTO categorias VALUES (1,"Informática");
INSERT INTO categorias VALUES (2,"Games");
INSERT INTO categorias VALUES (3,"Livros");
INSERT INTO categorias VALUES (4,"Eletrodomésticos");


ALTER TABLE usuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

