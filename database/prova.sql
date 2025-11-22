-- Parte Inicial Feito Pro Trabalho de PW2 do Professor Denilson
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
-- Parte do Trabalho da Professora Edina de Banco de Dados II
CREATE TABLE inimigos(
    ini_id INT AUTO_INCREMENT PRIMARY KEY,
    ini_nome VARCHAR(50) NOT NULL,
    ini_tipo VARCHAR(10) NOT NULL,
    ini_vida INT NOT NULL,
    ini_dano INT NOT NULL
);
CREATE TABLE npcs(
    npc_id INT AUTO_INCREMENT PRIMARY KEY,
    npc_nome VARCHAR(50) NOT NULL,
    npc_funcao VARCHAR(50) NOT NULL,
    npc_resumo VARCHAR(255) NOT NULL
);
CREATE TABLE areas(
    area_id INT AUTO_INCREMENT PRIMARY KEY,
    area_nome VARCHAR(50) NOT NULL,
    area_descricao VARCHAR(255) NOT NULL
);
CREATE TABLE localizacao_inimigo(
    loc_ini_id INT AUTO_INCREMENT PRIMARY KEY,
    ini_id INT NOT NULL,
    area_id INT NOT NULL,
    FOREIGN KEY (ini_id) REFERENCES inimigos(ini_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (area_id) REFERENCES areas(area_id) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE localizacao_npc(
    loc_npc_id INT AUTO_INCREMENT PRIMARY KEY,
    npc_id INT NOT NULL,
    area_id INT NOT NULL,
    locanpc_nota VARCHAR(255),
    FOREIGN KEY (npc_id) REFERENCES npcs(npc_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (area_id) REFERENCES areas(area_id) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE amuletos(
    amu_id INT AUTO_INCREMENT PRIMARY KEY,
    amu_nome VARCHAR(50) NOT NULL,
    amu_slot INT NOT NULL,
    amu_descricao VARCHAR(255) NOT NULL,
    npc_id INT,
    FOREIGN KEY (npc_id) REFERENCES npcs(npc_id) ON DELETE CASCADE ON UPDATE CASCADE
);
-- INSERTS
INSERT INTO inimigos (ini_nome, ini_tipo, ini_vida, ini_dano) VALUES 
('Crawlid', 'Comum', 8, 1),          
('Vengefly', 'Comum', 15, 1),        
('Falso Cavaleiro', 'Boss', 360, 1), 
('Mantis Warrior', 'Comum', 25, 1),  
('Radiancia Absoluta', 'Boss', 2181, 2),            
('Husk Guard', 'Mini-boss', 50, 2);
INSERT INTO npcs (npc_nome, npc_funcao, npc_resumo) VALUES 
('Sly', 'Mercador', 'Pequeno inseto obcecado por Geo. Vende itens básicos.'),
('Iselda', 'Mercadora', 'Vende mapas e acessorios de navegação na loja em Dirtmouth.'),
('Cornifer', 'Cartógrafo', 'Explorador que desenha mapas de novas áreas.'),
('Salubra', 'Amuleteira', 'Vende amuletos poderosos e abençoa o jogador.'),
('Quirrel', 'Explorador', 'Um aventureiro amigável e curioso sobre a história do reino.');
INSERT INTO areas (area_nome, area_descricao) VALUES 
('Encruzilhada Esquecida', 'Rodovias antigas e esquecidas, cheias de infecção apos um certo evento.'),
('Caminho Verde', 'Caminhos cobertos de vegetação e poças de ácido.'),
('Cidade das Lágrimas', 'A capital do reino, onde a chuva nunca para.'),
('Pico de Cristal', 'Uma enorme mina industrial cheia de cristais energizados.'),
('Godhome', 'O lugar onde os deuses residem, acessível apenas através de um ritual especial.');
INSERT INTO localizacao_inimigo (ini_id, area_id) VALUES 
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 2),
(5, 5),
(6, 1);
INSERT INTO localizacao_npc (npc_id, area_id) VALUES 
(1, 1),
(3, 1),
(3, 2),
(5, 3),
(5, 2);
INSERT INTO amuletos (amu_nome, amu_slot, amu_descricao, npc_id) VALUES 
('Fúria dos Caídos', 2, 'Aumenta o dano quando está com 1 vida.', null),
('Bússola Caprichosa', 1, 'Mostra a localização do jogador no mapa.', 2),
('Pedra do Xamã', 3, 'Aumenta o poder e tamanho dos feitiços.', 4),
('Longo Alcance', 2, 'Aumenta o alcance do ferrão.', null),
('Enxame de Coletores', 1, 'Coleta Geo automaticamente.', 1),
('Foco Rápido', 3, 'Permite se curar mais rapidamente.', 4);