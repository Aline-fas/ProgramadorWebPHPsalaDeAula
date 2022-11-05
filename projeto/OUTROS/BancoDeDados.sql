-- Criando o Banco de Dados do Projeto
create database projeto DEFAULT CHARSET=utf8;

-- Conectando a Base de Dados
use projeto;

-- Mostrando os bancos existentes
show databases;

create table funcionario(
	idfuncionario int primary key auto_increment,
	nome varchar(100) not null,
	data_nascimento date,
	cpf varchar(20) not null unique,
	estado_civil varchar(20),
	tipo varchar(20),
	celular varchar(20),
	email varchar(100) not null unique,
	senha varchar(255),
	ativo boolean
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table cliente(
	idcliente int primary key auto_increment,
	nome varchar(100) not null,
	data_nascimento date,
	orgao varchar(10),
	rg varchar(20),
	cpf varchar(20) not null unique,
	estado_civil varchar(20),
	sexo char,
	email varchar(100) not null unique,
	senha varchar(255),
	ativo boolean
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table contatos(
	id int primary key auto_increment,
	id_cliente int,
	tipo varchar(30),
	descricao varchar(50),
	obs varchar(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

alter table contatos add constraint contatos_cliente
foreign key (id_cliente) references cliente(idcliente)
on update cascade on delete cascade;

create table endereco(
	id int primary key auto_increment,
	id_cliente int not null,
	tipo varchar(15) not null,
	logradouro varchar(50) not null,
	numero varchar(10) not null,
	complemento varchar(100),
	bairro varchar(200),
	cidade varchar(200),
	estado char(2),
	cep varchar(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

alter table endereco add constraint endereco_cliente
foreign key (id_cliente) references cliente(idcliente)
on update cascade on delete cascade;

create table produto(
	idproduto int primary key auto_increment,
	nome varchar(255) not null,
	tipo varchar(100) not null,
	descricao text,
	foto varchar(255),
	ativo boolean
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table estoque(
	idestoque int primary key auto_increment,
	id_produto int not null,
	qtd int not null,
	registro varchar(15) not null,
	data_registro date not null,
	valor double
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

alter table estoque add constraint estoque_produto
foreign key (id_produto) references produto(idproduto)
on update cascade on delete cascade;

create table historico_compra(
	idhistorico int primary key auto_increment,
	id_cliente int not null,
	data_compra date not null,
	id_produto int not null,
	nome_produto varchar(255),
	tipo_produto varchar(100),
	valor double
);

alter table historico_compra add constraint historico_compra_cliente
foreign key (id_cliente) references cliente(idcliente)
on update cascade on delete cascade;

alter table historico_compra add constraint historico_compra_produto
foreign key (id_produto) references produto(idproduto)
on update cascade on delete cascade;