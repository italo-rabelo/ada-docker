CREATE DATABASE IF NOT EXISTS Loja;

USE Loja;

CREATE TABLE IF NOT EXISTS produtos(
    id INT(5) AUTO_INCREMENT,
    nome VARCHAR (80),
    preco DECIMAL (10, 2),
    PRIMARY KEY (id)
);

INSERT INTO produtos VALUE(0, 'Curso DevOps: Do Zero ao primeiro emprego', 2499);
INSERT INTO produtos VALUE(0, 'Curso Kubernetes: Orquestração de conteiners', 899);