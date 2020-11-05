-- Criação do banco de dados fseletro
create database care_guide;

-- Selecionando o banco de dados
use care_guide;

-- Criando a tabela users
CREATE TABLE usuarios (
  id integer AUTO_INCREMENT primary key,
  nome varchar(30),
  email varchar(40),
  senha varchar(32)
)

-- Criando a tabela reference
CREATE TABLE referencias (
  id_ref integer AUTO_INCREMENT primary key,
  cargo varchar(30),
  sobre varchar(50),
  facebook varchar(50),
  instagram varchar(50),
  youtube varchar(50),
  site varchar(50),
  autor integer,
  FOREIGN KEY (autor) REFERENCES usuarios(id_usuario)
)
