USE form_registra_utente;

DROP DATABASE form_registra_utente;

CREATE DATABASE form_registra_utente;

-- tabella utenti
create table utenti (
    nome varchar(255) NOT NULL,
    cognome varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE
);

truncate utenti;
drop table utenti;
