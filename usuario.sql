create database formulario_web;

use formulario_web;

create table usuario(
id int not null auto_increment primary key,
nome varchar (50),
senha varchar (15),
email varchar (30),
telefone varchar (11),
sexo varchar (15),
data_nasc date,
cidade varchar (25),
estado varchar (2),
endereco varchar (30)
) engine InnoDB;

select * from usuario;