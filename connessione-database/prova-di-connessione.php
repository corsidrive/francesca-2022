<?php

// parametri di connessione 
$servername = "localhost";
$username = "root";
$password = "fiacca";
$dbname = "francesca_db";

try {
// $auto = new Automobile()
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  
  // $auto->avanti()
  // accende e imposta la segnalazione degli errori quando php si connette al database
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $clienti = $conn->query("SELECT * FROM cliente;");
  
  $clienti = $conn->query("insert into cliente (nome,    cognome,citta_id,email)
                                        VALUES      ('Mario','Rossi' ,1,   'qw@bw.it'),
                                                    ('Gianni',NULL   ,1,     'qw@be.it')
                                                    ,('Alessandra','Rossi',2,'qw@br.it')
                                                    ,('Mario','Verdi',3,'qw@bt.it')
                                                    ,('Maria','Verdi',3,'qw@by.it');"
                                    );


print_r($clienti);
  
    foreach ($clienti as  $cliente) {
        
        echo "{$cliente['nome']} {$cliente['cognome']} {$cliente['cliente_id']} \n";
    }

  echo "Connected successfully";
  // PDO Exception è un oggetto che rappresenta un errore
} catch(PDOException $e) {

  echo $e->getCode()." il codice dell'errore, errore nel file: ".$e->getFile(); 
  echo "Orrore la connessone non va: " . $e->getMessage();

}


?>