USE francesca;
-- elmina database
-- https://www.w3schools.com/sql/sql_drop_db.asp
DROP DATABASE francesca_db;
-- crea database
-- https://www.w3schools.com/sql/sql_create_db.asp
CREATE DATABASE francesca_db;

-- creazione di una tabella
-- https://www.w3schools.com/sql/sql_create_table.asp

/*
CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);
*/
DROP TABLE cliente;
CREATE TABLE cliente (
    cliente_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    email VARCHAR(255)  NOT NULL UNIQUE,
    citta_id INT 
); 

CREATE TABLE citta (
    citta_id int(10) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    regione_id  int(10) NOT NULL,
    PRIMARY KEY (citta_id)  
);

CREATE TABLE regioni (
    regione_id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

-- https://www.w3schools.com/sql/sql_insert.asp

/*
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
*/

truncate regioni;

insert INTO regioni (nome)
            VALUES  ('Piemonte'),('Lazio')
                    ;


insert  INTO citta (nome,regione_id)
        VALUES     ('Torino',1)
                  ,('Asti',1)
                  ,('Roma',2)
                  ;


truncate cliente;
insert into cliente (nome,    cognome,citta_id,email)
        VALUES      ('Mario','Rossi' ,1,   'a@b.it'),
                    ('Gianni',NULL   ,1,     'b@b.it')
                    ,('Alessandra','Rossi',2,'c@b.it')
                    ,('Mario','Verdi',3,'d@b.it')
                    ,('Maria','Verdi',3,'e@b.it')
                    ;

# Duplicate entry 'a@b.it' for key 'email'
insert into cliente (nome,cognome,citta_id,email)
        VALUES      ('Gianni2','Rossi2',1,'z@b.it')
                    ;



delete from cliente WHERE nome = 'Gianni2' ;
delete from cliente WHERE email = 'e@b.it' ;

delete from cliente WHERE cliente_id = 10;

