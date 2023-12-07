DROP DATABASE  listaTarefa;
CREATE DATABASE listaTarefa;
USE listaTarefa;

CREATE TABLE tarefa(
	idTarefa INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nomeTarefa varchar(70),
    descricao VARCHAR(255),
    dia DATE
);



