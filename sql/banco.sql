create database revista;
use revista;

create table login(
	idUser int auto_increment not null primary key,
    nomeUser varchar(50) not null,
    nickname varchar(50) not null,
    senha varchar(50) not null
);

create table materia(
	idMat int not null auto_increment primary key,
    titulo varchar(100) not null,
    texto longtext not null
);