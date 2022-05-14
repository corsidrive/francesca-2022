DROP DATABASE gestione_personale;

CREATE DATABASE gestione_personale;

CREATE TABLE person(  
    id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(50) NOT NULL
) DEFAULT CHARSET UTF8;


#create
insert into person (nome,email,password)
                    VALUES ('a','b','c');

#cancella persone
truncate person;