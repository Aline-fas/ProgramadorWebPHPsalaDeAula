-- BANCO DE DADOS

	-- Acessando o diretório do banco
	-- Abrir o prompt(cmd) de comando pelo "executar" digitando CMD
	-- CD \
	-- CD Xampp\mysql\bin
	
	--PS: Caso use a console do Xampp é só necessário usar um dos comandos abaixo:
	
	-- mysql -u root -p
	-- ou
	-- mysql --user=root --password=
	-- ----------------------------------------------------------
	/*
	1 - Fase Conceitual
		Rascunho
		Ex: Tabelas (Aluno, Curso)
	2 - Fase Lógica
		Programas de modelagem (BRmodelo, Workbanch, JUDE)
		E: Tabela Aluno (id primary key, nome texto, idade int, telefone ...) 
	3 - Fase Física
		Script do Banco
		CREATE TABLE aluno (
			idAluno int primary key,
			nome varchar(100),
			idade int(3)
		);
	*/
	
	--Cria a Base de dados
	CREATE DATABASE IF NOT EXISTS aula_bd;
	
	-- mostra todos os bancos existentes
 	SHOW DATABASES;
	
	--Selecionar o BANCO
	USE aula_bd;
	
	--Criando uma tabela
	CREATE TABLE aluno(
		idAluno INT PRIMARY KEY AUTO_INCREMENT,
		nome VARCHAR(50) NOT NULL,
		nota01 DOUBLE,
		nota02 DOUBLE
	);
	
	-- Descreve as informações da tabela
	DESC aluno;
	
	-- Inserindo informações na tabela
	INSERT INTO aluno (nome, nota01, nota02) VALUES ('Maria', 8., 5);
	INSERT INTO aluno VALUES (NULL, 'Paulo', 7.5, 6.7);
	INSERT INTO aluno VALUES (NULL, 'João', 5.5, 9.7),
	(NULL, 'Julia', 7.5, 5.5) ;
	INSERT INTO aluno VALUES (NULL, 'Andre', 5.5, 9.7),
	(NULL, 'Amanda', 7.5, 5.5) ;
	INSERT INTO aluno VALUES (NULL, 'Julia', 7.5, 5.5);
	-- Exibir todas as informações da tabela
	SELECT * FROM aluno;
	
	-- Exibir informações da tabela, selecionando os campos
	SELECT idaluno, nome FROM aluno;
	
	--Exibir as informações da tabela limitando a 2 recorrencias
	SELECT * FROM aluno LIMIT 2;
	
	-- Exibir as informações da tabela de sómente um usuário
	SELECT * FROM aluno WHERE idaluno = 1;
	
	-- Exibir as informações da tabelas aluno, com a coluna nota01 que tenha valor nulo
	SELECT * FROM aluno WHERE nota01 IS NULL;
	
	-- Exibir as informações da tabelas aluno, com a coluna nota01 que NÃO tenha valor nulo
	SELECT * FROM aluno WHERE nota01 IS NOT NULL;
	
	--Exibir a quantidade de registro de uma Tabela
	SELECT COUNT(nome) FROM aluno;
	
	-- Exibir registros em ordem
	SELECT * FROM aluno ORDER BY nome;
			
	-- Exibir registros em ordem crescente
	SELECT * FROM aluno ORDER BY nome ASC;

	-- Exibir registros em ordem decrescente
	SELECT * FROM aluno ORDER BY nome DESC;	
	
	-- Exibir registros em ordenado em mais de uma coluna
	SELECT * FROM aluno ORDER BY nome, nota01;
	
	-- Exibir o ultimo registro da tabela
	SELECT * FROM aluno ORDER BY idaluno DESC LIMIT 1;
	
	-- Seleção condicional
	-- Exibi nomes que comece com a letra J
	SELECT * FROM aluno WHERE nome LIKE 'J%';
	-- Exibi nomes que termina com a letra o
	SELECT * FROM aluno WHERE nome LIKE '%o';
	-- Exibir nomes que tenha a letra a ...
	SELECT * FROM aluno WHERE nome LIKE '%a%';
	
	-- Exibir intervalos
	SELECT * FROM aluno WHERE nota01 BETWEEN 7 AND 8;
	
	-- UPDATE
	
	UPDATE aluno SET nota02 = 10 WHERE idaluno = 4;
	UPDATE aluno SET nome = 'Arnaldo', nota01 = 9.9, nota02 = 1.1 WHERE  idaluno = 5;
	
	-- DELETE
	DELETE FROM aluno WHERE  idaluno = 4;
	
	-- Excluir todos os registros menos o usuário com id igual a 3:
	DELETE FROM aluno WHERE idaluno <> 3;
	
	-- Alterando informações da TABELA
	
	-- Adicionar nova coluna na TABELA
	ALTER TABLE aluno ADD media DOUBLE;
	-- adicionando uma coluna depois de outra
	ALTER TABLE aluno ADD data_nascimento DATE AFTER nome;
	-- adicionando uma coluna antes de outra
	ALTER TABLE aluno ADD turma varchar(30) FIRST nota01; --olhar
	ALTER TABLE aluno ADD data_nascimento DATE FIRST media;
	-- Excluindo uma coluna da tabela
	ALTER TABLE aluno  DROP COLUMN data_nascimento;
	
	-- Alterar o Nome da TABELA
	RENAME TABLE aluno TO aluno2;
	-- ALTERA NOME DA COLUNA
	ALTER TABLE aluno2 CHANGE data_nascimento nascimento date;
	-- Alterando o tipo de dados
	ALTER TABLE aluno2 MODIFY COLUMN nota02 int;
	
	--Excluindo todos os dados de uma coluna
	UPDATE aluno2 SET nota02 = null;
	
	
	--Data em Banco yyyy-MM-DD
	SELECT DAY(NOW());
	
	DROP TABLE aluno2;
	-- RELAÇÃO ENTRE TABELAS
	
	CREATE TABLE aluno(
		idAluno INT PRIMARY KEY AUTO_INCREMENT,
		nome VARCHAR(50)
	);
	
	CREATE TABLE disciplina(
		idDisciplina INT PRIMARY KEY AUTO_INCREMENT,
		nomeDisciplina VARCHAR(255) NOT NULL,
		nota01 DOUBLE,
		nota02 DOUBLE,
		id_aluno int,
		FOREIGN KEY(id_aluno) REFERENCES aluno(idAluno) 
		--ON UPDATE CASCADE ON DELETE CASCADE
	);
	
	INSERT INTO aluno VALUES(NULL, 'Jose');
	INSERT INTO disciplina VALUES (NULL, 'PHP', 6.3, 8.5, 1);
	
	SELECT * FROM aluno JOIN disciplina ON idaluno = id_aluno;
	SELECT nome, nomeDisciplina, nota01, nota02	FROM aluno JOIN disciplina ON idaluno = id_aluno;