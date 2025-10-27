CREATE DATABASE quiz_hk;
USE quiz_hk;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
CREATE TABLE provas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT NOT NULL,
    data_prova DATETIME DEFAULT CURRENT_TIMESTAMP,
    pontuacao INT NOT NULL,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id)
);
SELECT * FROM alunos;
SELECT * FROM provas;