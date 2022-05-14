<?php require "./layout/head.php"; ?>



<h2 class="mt-5">Tabella Utenti Registrati</h2>
<div class="container mt-5"> <!-- apertura container -->

  <div class="tabella-utenti-registrati-container py-1">
    <table class="tabella-utenti-registrati table table-bordered">
      <thead class="table-primary">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Cognome</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>


<?php

  include "./configuration.php";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      # QUERY
      $utenti = $conn->query("SELECT * FROM utenti");
      // visualizzazione dati
      foreach ($utenti as $rigaUtente) {
          echo "<tr><th scope='row'>-</th><td>{$rigaUtente['nome']}</td><td>{$rigaUtente['cognome']}</td><td>{$rigaUtente['email']}</td></tr>";
      }
      # FINE QUERY


  } catch(PDOException $e) {
      # se errore
      echo "Codice errore: ".$e->getCode()."<br>Errore nel file: ".$e->getFile()."<br>";
      echo "Errore la connessione non va: ".$e->getMessage()."<br>";
  }
?>


      </tbody>
    </table>
  </div>

</div> <!-- chiusura container -->



<?php require "./layout/footer.php"; ?>