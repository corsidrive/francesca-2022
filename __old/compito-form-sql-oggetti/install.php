<?php

# CONNESSIONE DATABASE SQL
include "./config.php";

try {
    # PROVA DI CONNESSIONE
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $GestionePersone = $conn->query("
        CREATE TABLE person (
            id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            nome varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            password varchar(50) NOT NULL
        ) DEFAULT CHARSET UTF8;
    ");

} catch (PDOException $e) {
    # SE ERRORE DI CONNESSIONE
    echo "Codice errore: ".$e->getCode()."<br>Errore nel file: ".$e->getFile()."<br>";
    echo "Errore la connessione non va: ".$e->getMessage()."<br>";
}

?>