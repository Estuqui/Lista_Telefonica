-- Cria banco de dados lista_telefonica
create database lista_telefonica;

-- Define como banco de dados em uso
use lista_telefonica;

-- Cria a tabela contatos
-- OBS: Apertar F3 pra ligar MultiLine
create table contatos (
    id int not null auto_increment primary key, 
    nome varchar(100) not null,
    sobrenome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(15) not null
);
-- OBS: Apertar F3 para desabilitar MultiLine se ainda estiver ativo

-- Cria usuario jessica com senha 123456
create user 'jessica'@'%' identified by '123456';

-- Garante o privilegio no banco * e na tabela * --> * = todos || ex: nomedobanco.nomedatabela
grant all privileges on *.* to 'jessica'@'%';