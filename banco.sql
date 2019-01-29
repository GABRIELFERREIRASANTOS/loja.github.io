mysql -u root

-- Criar banco de dados
create database loja1;

use loja;

create table cliente(
	id int primary key auto_increment,
	nome varchar(75),
	sobrenome varchar(75),
	email varchar(255),
	senha varchar(255),
	endereco varchar(255),
	cidade varchar(100),
	estado varchar(50)

	);

--------- PRODUTOS ---------------------

create table produtos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    preco DECIMAL (10,2),
    imagem VARCHAR(50)

    );