USE francesca;
-- elmina database
-- https://www.w3schools.com/sql/sql_drop_db.asp
DROP DATABASE francesca;
-- crea database
-- https://www.w3schools.com/sql/sql_create_db.asp
CREATE DATABASE francesca 
DEFAULT CHARACTER SET = 'utf8mb4';

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
    cliente_id int ,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    email VARCHAR(255)  NOT NULL UNIQUE,
    citta_id INT 
); 

CREATE TABLE citta (
    citta_id int(10),
    nome VARCHAR(255),
    regione_id  int(10)  
);

CREATE TABLE regioni (
    regione_id int(10),
    nome VARCHAR(255)
);

-- https://www.w3schools.com/sql/sql_insert.asp

/*
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
*/

truncate regioni;

insert INTO regioni (regione_id,nome)
            VALUES  (1,'Piemonte')
                    ,(2,'Lazio')
                    ;


insert  INTO citta (citta_id,nome,regione_id)
        VALUES     (1,'Torino',1)
                  ,(2,'Asti',1)
                  ,(3,'Roma',2)
                  ;


truncate cliente;
insert into cliente (nome,cognome,citta_id,cliente_id,email)
        VALUES      ('Mario','Rossi',1,1,'a@b.it'),
                    ('Gianni',NULL,1,2,'b@b.it')
                    ,('Alessandra','Rossi',2,3,'c@b.it')
                    ,('Mario','Verdi',3,4,'d@b.it')
                    ,('Maria','Verdi',3,5,'e@b.it')
                    ;


-- REVIEW

-- - datatime    
-- - voto       5
-- - cliente_id 3