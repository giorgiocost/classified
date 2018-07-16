
--sudo docker exec -i db_mysql mysql --user=giorgio --password=12345 --database=banco < ./scripts/init.sql
--docker exec -i db_mysql mysql -u root --password=1234 my_db < ./scripts/init.sql
CREATE DATABASE IF NOT EXISTS classificados

USE classificados

CREATE TABLE IF NOT EXISTS usuarios(
    id_usuarios INT(11) AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(32) NOT NULL
    PRIMARY KEY(id_usuarios)
)

CREATE TABLE IF NOT EXISTS (
    id_usuarios INT(11) AUTO_INCREMENT NOT NULL,
)

CREATE TABLE IF NOT EXISTS (
    id_usuarios INT(11) AUTO_INCREMENT NOT NULL,
)