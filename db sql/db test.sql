create database usuarios character set utf8 collate uft8_general_ci;

use usuarios;

create table usuarios(
id int(11) auto_increment,
nome varchar(25),
email varchar(25),
login varchar(25),
senha varchar(25),
primary key(id)
);

select * from usuarios;