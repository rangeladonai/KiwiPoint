CREATE DATABASE Letrim;
USE Letrim;

CREATE TABLE Empresa(
	idEmpresa int not null auto_increment primary key,
	nomeEmpresa varchar(255) not null,
  	cnpj varchar(18) not null,
  	cep varchar(9),
  	rua varchar(50),
  	numero int,
  	bairro varchar(50),
  	cidade varchar(50)
);

CREATE TABLE Funcionario(
	idFuncionario int not null auto_increment primary key,
	nomeFuncionario varchar(50) not null,
	cpf varchar(14) not null,
	idEmpresa int not null,
	
	FOREIGN KEY(idEmpresa) REFERENCES Empresa(idEmpresa)
);

CREATE TABLE Ponto(
	idPonto int not null auto_increment primary key,
	dataPonto DateTime not null,
	idFuncionario int not null,
	
	FOREIGN KEY (idFuncionario) REFERENCES Funcionario(idFuncionario)
);

