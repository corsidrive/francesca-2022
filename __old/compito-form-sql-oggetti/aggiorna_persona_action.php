<?php require "./layout/head.php"; ?>


<h2 class="mt-5 px-md-4">Aggiorna Persona - action</h2>
<div class="container mt-5 px-md-4"> <!-- apertura container -->


<?php
  include "./class/crud/GestionePersonale.php";

  $idPersonaDaAggiornare = $_POST['idPersonaDaAggiornare'];
  $nomeNuovo = $_POST['nomeNuovo'];
  $emailNuova = $_POST['emailNuova'];

  $GestionePersonale = new GestionePersonale();
  $res = $GestionePersonale->update($idPersonaDaAggiornare, $nomeNuovo, $emailNuova);

  if ($res === true) {
    echo "<div class='alert alert-success mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Dati aggiornati!</h4><hr><p class='mb-0 mx-3'><strong>Person ID:</strong> $idPersonaDaAggiornare<br><strong>nome:</strong> $nomeNuovo<br><strong>email:</strong> $emailNuova</p></div>";
  } else if ($res === false) {
    echo "<div class='alert alert-danger mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Database non connesso</h4><hr><p class='mb-0'>Riprova più tardi.</p></div>";
  }


?>


</div> <!-- chiusura container -->


<?php require "./layout/footer.php"; ?>