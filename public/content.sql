-- Criação do banco de dados fseletro
create database care_guide;

-- Selecionando o banco de dados
use care_guide;

-- Criando a tabela users
CREATE TABLE usuarios (
  id_usuario int(11) AUTO_INCREMENT primary key,
  nome varchar(30),
  telefone varchar(30),
  email varchar(40),
  senha varchar(32)
)