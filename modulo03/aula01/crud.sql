-- mariadb -u root -p --

USE db_escola;

-- inserir 1 registro --
INSERT INTO tb_professor (nome, email,cpf) 
VALUES (
  'chiquim', 'chiquim@gmail.com', '32156987420'
);

-- mais de 1 registro --
INSERT INTO tb_professor(nome, email, cpf)
VALUES
  ('chiquim', 'chiquim@gmail.com', '32156987420'),
  ('menino', 'menino@gmail.com', '32156787420'),
  ('maria', 'maria@gmail.com', '12156987420');

-- excluir 1 registro --
DELETE FROM tb_professor 
WHERE email='menino@gmail.com';

-- excluir todos --
DELETE FROM tb_professor;

-- editar dados de 1 registro --
UPDATE tb_professor SET nome='Luiza' WHERE cpf='12156987420';

-- editar dados de todos os registos --
UPDATE tb_professor SET nome='Francisco';

-- selecionar --
SELECT * FROM tb_professor;

SELECT * FROM tb_professor WHERE id='5';

SELECT nome, cpf FROM tb_professor;


