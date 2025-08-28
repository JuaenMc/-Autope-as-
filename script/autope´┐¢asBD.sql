create database autopeca;
use autopeca;

create table usuarios(
nome varchar(100) not null,
sobrenome varchar(100) not null,
email varchar(100) not null,
cpf  varchar(11) not null primary key,
telefone varchar(11) not null,
cep varchar(25) not null,
rua varchar(100) not null,
numero int not null,
bairro varchar(100) not null,
cidade varchar(110) not null,
estado varchar(2) not null,
complemento varchar(100),
senha varchar(25) not null
);

