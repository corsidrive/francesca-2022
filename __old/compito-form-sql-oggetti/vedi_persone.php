<?php require "./layout/head.php"; ?>



<h2 class="mt-5 px-md-4">Vedi Persone</h2>
<div class="container mt-5 px-md-4"> <!-- apertura container -->


<div class="tabella-person-container">
    <table class="tabella-person table table-bordered table-hover mt-1 mb-1">
      <thead class="table-info">
        <tr>
          <th width="10%" scope="col">#</th>
          <th width="30%" scope="col">Nome</th>
          <th width="30%" scope="col">Email</th>
          <th width="30%" scope="col">Password</th>
        </tr>
      </thead>
      <tbody>

<?php

    include "./class/crud/GestionePersonale.php";

    $GestionePersonale = new GestionePersonale();
    $persone = $GestionePersonale->readAll();

    if ($persone !== false && $persone !== []) {
      foreach ($persone as $persona) {
          echo "<tr><th scope='row'>{$persona['id']}</th><td>{$persona['nome']}</td><td>{$persona['email']}</td><td>{$persona['password']}</td></tr>";
      }
      echo "</tbody></table></div>"; //chiusura blocco tabella
    } else if ($persone !== false && $persone === []) {
      echo "</tbody></table></div>"; //chiusura blocco tabella
      echo "<p class='mt-3 mb-3 text-center'>... tabella vuota ...</p>";
    } else {
      echo "</tbody></table></div>"; //chiusura blocco tabella
      echo "<div class='alert alert-danger mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Database non connesso</h4><hr><p class='mb-0'>Riprova più tardi.</p></div>";
    }
    
?>


</div> <!-- chiusura container -->



<?php require "./layout/footer.php"; ?>