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
  value FLOAT(5,2) NOT NULL,
  category_id INT(11) NOT NULL,
  quantity INT(5) NOT NULL,
  created_at DATETIME NOT NULL

);

INSERT INTO tb_category(name, description) 
VALUES
  ('informatica', 'produtos de info e acessorios para computador'),
  ('escritorio', 'caneta, cadernos, folhas'),
  ('eletronicos', 'TV, caixa de som');

INSERT INTO tb_product(name, description, photo, value, category_id, quantity, created_at) 
VALUES
  ('Teclado', 'Teclado de mesa', 'https://cf.shopee.com.br/file/c7d5bcee2da7c1ecb530c10b9e347f5d', 199.89, 1, 50, '2022-05-10 09:30:34'),
  ('Teclado Gamer', 'Teclado mecanico', 'https://m.media-amazon.com/images/I/61cgzI9lKJL._AC_SX522_.jpg', 399.89, 2, 20, '2022-05-11 10:30:34'),
  ('Teclado musical', 'Teclado musical', 'https://m.media-amazon.com/images/I/51+8h-HSiYL._AC_SX679_.jpg', 1900, 3, 10, '2022-05-12 11:30:34');

  