<?php

# CONNESSIONE DATABASE SQL
include "./configuration.php";

try {
    
    # PROVA DI CONNESSIONE
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $utenti = $conn->query("
        create table utenti (
        nome varchar(255) NOT NULL,
        cognome varchar(255) NOT NULL,
        email varchar(255) NOT NULL UNIQUE
    );");

} catch(PDOException $e){

}