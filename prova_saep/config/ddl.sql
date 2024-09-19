create database petshopp;
use petshopp;

create table clientes (
id int auto_increment primary key,
nome varchar (100) not null,
cpf varchar (25) not null unique
);

create table cargos (
id int auto_increment primary key,
nome varchar (20) not null unique,
descricao varchar (255) not null unique
);

create table colaboradores (
id int auto_increment primary key,
nome varchar (100) not null,
cpf varchar (25) not null unique,
cargo int not null,
constraint
foreign key (cargo) references cargos(id)
);

create table servicos (
id int auto_increment primary key,
titulo varchar(20) not null,
quem_executa int not null,
constraint
foreign key (quem_executa) references cargos(id)
);

create table solicitacoes(
id int auto_increment primary key,
id_cliente int not null,
id_servico int not null,
descricao varchar(255) not null,
constraint
foreign key (id_cliente) references clientes(id),
foreign key (id_servico) references servicos(id)
);

create table atividades(
id int auto_increment primary key,
id_solicitacao int not null,
id_colaborador int not null,
urgencia varchar (20),
situacao varchar (20),
constraint
foreign key (id_solicitacao) references solicitacoes(id),
foreign key (id_colaborador) references colaboradores(id)
);

insert into cargos(
nome, descricao)
values (
"Veterinario", "cura os bicho"),(
"Tosador", "tosa os bicho"
);

insert into servicos(
titulo, quem_executa)
values(
"castração", 1),(
"consulta", 1),(
"cirurgia", 1),(
"banho", 2),(
"tosa", 2),(
"cortar unha", 2
);




