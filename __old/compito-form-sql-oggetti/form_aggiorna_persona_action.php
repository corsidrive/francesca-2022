<?php require "./layout/head.php"; ?>


<h2 class="mt-5 px-md-4">Aggiorna Persona - action</h2>
<div class="container mt-5 px-md-4"> <!-- apertura container -->


<?php
  include "./class/crud/GestionePersonale.php";

  $personIdAggiorna = $_POST['idAggiorna'];
  $passwordCorrispondenteAggiorna = $_POST['passwordCorrispondenteAggiorna'];

  $GestionePersonale = new GestionePersonale();
  $res = $GestionePersonale->read($personIdAggiorna, $passwordCorrispondenteAggiorna);

  if ($res !== false && $res !== 'notFound') {
      echo "
      <div class='mb-5'>
          <h4 class='pt-4'><mark>I tuoi dati:</mark></h4>
          <hr class='mb-4'>
          <form class='row g-3 pb-3 pt-2' action='aggiorna_persona_action.php' method='POST' autocomplete='off' novalidate>
              <input style='display:none;' type='number' name='idPersonaDaAggiornare' value='{$personIdAggiorna}'>
              <!-- nome -->
              <div class='col-12'>
                <label for='nomeNuovo' class='form-label'>Conferma o cambia nome *</label>
                <input disabled type='text' class='form-control' value='{$res['nome']}'>
                <input type='text' class='mt-2 form-control' id='nomeNuovo' name='nomeNuovo' placeholder='Mario' required>
                <div class='valid-feedback'>Corretto!</div>
                <div class='invalid-feedback'>Inserisci un nome</div>
              </div>
              <!-- email -->
              <div class='col-12'>
                <label for='emailNuova' class='form-label'>Conferma o cambia email *</label>
                <input disabled type='email' class='form-control' value='{$res['email']}'>
                <input type='email' class='mt-2 form-control' id='emailNuova' name='emailNuova' placeholder='mariorossi@gmail.com' required>
                <div class='valid-feedback'>Corretto!</div>
                <div class='invalid-feedback'>Inserisci un indirizzo email valido</div>
              </div>
              <!-- submit -->
              <div class='col-12 mt-4 pt-4 text-center'>
                <button type='submit' class='btn btn-outline-primary'>Aggiorna i tuoi dati</button>
              </div>
          </form>
      </div>";
  } else if ($res === false) {
      echo "<div class='alert alert-danger mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Database non connesso</h4><hr><p class='mb-0'>Riprova più tardi.</p></div>";
  } else if ($res === 'notFound') {
      echo "<div class='alert alert-warning mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Persona non trovata</h4><hr><p class='mb-0'>Id inesistente o password errata</p></div>";
  } 
?>


</div> <!-- chiusura container -->


<!-- JAVASCRIPT -->
<script src="./js/tools.js"></script>
<script>
  // imposta il pattern dei tag input e valida la form onsubmit
  validazioneForm()
</script>


<?php require "./layout/footer.php"; ?>