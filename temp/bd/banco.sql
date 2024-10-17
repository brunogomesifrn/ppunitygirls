CREATE DATABASE IF NOT EXISTS pp23unitygirls;

USE pp23unitygirls;

CREATE TABLE IF NOT EXISTS tipo_acao(
    id int not null auto_increment primary key,
    nome VARCHAR(500)
);

CREATE TABLE IF NOT EXISTS usuario(
    email VARCHAR(150) not null  primary key,
    senha VARCHAR(100) not null,
    nome VARCHAR(500),
    apelido VARCHAR(500)
);

CREATE TABLE IF NOT EXISTS acao(
    id int not null auto_increment primary key,
    email_usuario_autor VARCHAR(150) not null,
    data_cadastro DATE,
    titulo VARCHAR(150),
    descricao VARCHAR(150),
    foto VARCHAR(150),
    link VARCHAR(150),
    anexo VARCHAR(150),
    responsavel VARCHAR(150),
    id_tipo_acao int,
    FOREIGN KEY (id_tipo_acao) REFERENCES tipo_acao(id)
);
  
