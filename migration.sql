-- Criação do banco de dados lista_telefonica no MySQL
create database lista_telefonica;

-- Define como banco de dados em uso
use lista_telefonica;

-- Criação da tabela contatos
-- OBS: F3 ativa a MultiLine
create table contatos (
    id int not null auto_increment primary key, 
    nome varchar(100) not null,
    sobrenome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(15) not null
);

-- OBS: F3 desabilita MultiLine 
-- Criando usuario jessica com senha 123456
create user 'jessica'@'%' identified by '123456';

-- Garantindo o privilegio no banco * e na tabela * --> * = todos
grant all privileges on *.* to 'jessica'@'%';


-- Criação do banco para o login no MySQL
create table 'lista.telefonica' . 'usuarios' ( 
    loginuser varchar(45) not null primary key,
    senhauser varchar(64) not null,
    nomeuser varchar(145) not null,
);