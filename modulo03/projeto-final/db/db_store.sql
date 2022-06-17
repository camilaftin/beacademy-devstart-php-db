-- criar o banco --
CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

-- criacao das tabelas --
CREATE TABLE tb_category(
  id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL

);

CREATE TABLE tb_product(
  id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL,
  photo VARCHAR(255) NOT NULL,
  valor FLOAT(5,2) NOT NULL,
  categoria_id INT(11) NOT NULL,
  quantity INT(5) NOT NULL,
  created_at DATETIME NOT NULL

);

INSERT INTO tb_category(name, description) 
VALUES
  ('informatica', 'produtos de info e acessorios para computador'),
  ('escritorio', 'caneta, cadernos, folhas'),
  ('eletronicos', 'TV, caixa de som');

INSERT INTO tb_product(name, description, photo, valor, quantity) 
VALUES
  (),
  