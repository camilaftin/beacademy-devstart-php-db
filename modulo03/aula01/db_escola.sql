-- Para criar um banco de dados --

CREATE DATABASE db_escola;

-- selecionar o banco --
USE db_escola;

-- Criar tabelas --

CREATE TABLE tb_professor(

  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL

);

CREATE TABLE tb_aluno(

  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  matricula VARCHAR (10) NOT NULL

);

CREATE TABLE tb_curso(

  nome VARCHAR(100) NOT NULL,
  carga VARCHAR(10),
  disciplina VARCHAR(100),

);

CREATE TABLE tb_disciplina(

  nome VARCHAR(100) NOT NULL,
  carga VARCHAR(10),

);

-- deletar uma tabela --

DROP TABLE tb_professor;
DROP TABLE tb_aluno;

-- Inserir dados --
INSERT INTO tb_professor(nome, email, cpf)
VALUES (
  'Alessandro', 'ale@email.com', '12312312809'
);

INSERT INTO tb_professor(nome, email, cpf)
VALUES (
  'Josefer', 'josefer@email.com', '10335098712'
);

INSERT INTO tb_aluno(nome, email, cpf, matricula)
VALUES (
  'Leleco', 'leleco@email.com', '33311155598', '1023456789'
);


-- selecionar os dados --

SELECT * FROM tb_professor;
