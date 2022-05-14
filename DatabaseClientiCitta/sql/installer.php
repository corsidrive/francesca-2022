<?php
//print_r(scandir('.'));

require "../config.php";
$sql = file_get_contents("./francesca_db_install.sql");


try {
  $conn = new PDO("mysql:host=".DB_SERVERNAME, DB_USERNAME, DB_PASSWORD);

  // accende e imposta la segnalazione degli errori quando php si connette al database
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = $conn->query($sql);
  

  echo "Database Creato";

  // PDO Exception è un oggetto che rappresenta un errore
} catch(PDOException $e) {

  echo $e->getCode()."<br>il codice dell'errore, errore nel file: ".$e->getFile(); 
  echo "Orrore la connessone non va: " . $e->getMessage();

}


?>