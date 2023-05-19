CREATE DATABASE Letrim;
USE Letrim;

CREATE TABLE Empresa(
	idEmpresa int not null auto_increment primary key,
	nomeEmpresa varchar(255) not null,
  	cnpj varchar(18) not null,
  	cep varchar(9),
	complemento varchar(100),
  	rua varchar(50),
	uf varchar(50),
  	numero int,
  	bairro varchar(50),
  	cidade varchar(50),
	email varchar(150),
	senha varchar(150)
);

CREATE TABLE Funcionario(
	idFuncionario int not null auto_increment primary key,
	nomeFuncionario varchar(50) not null,
	cpf varchar(14) not null,
	idEmpresa int not null,
	codigo varchar(50) not null,
	email varchar(255),
	senha varchar(255),
	
	FOREIGN KEY(idEmpresa) REFERENCES Empresa(idEmpresa)
);

CREATE TABLE Ponto(
	idPonto int not null auto_increment primary key,
	dataPonto DateTime not null,
	idFuncionario int not null,
	urlFoto varchar(255),
	
	FOREIGN KEY (idFuncionario) REFERENCES Funcionario(idFuncionario)
);

