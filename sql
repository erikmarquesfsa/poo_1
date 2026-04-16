create database mural;
use mural;

create table recados(
	id int auto_increment primary key,
	nome varchar(100),
	mensagem text,
	data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from recados;