<?php require "./layout/head.php"; ?>


<div class="container px-md-4 mb-5"> <!-- apertura container -->



<!-- BLOCCO CREA PERSONA -->
<div id="creaPersona" class="pt-5 mb-5">
  <h2 class="pt-4 h3"><mark>Crea Persona</mark></h2>
  <hr class="mb-5">

    <!-- inizio-form -->
    <form id="tagFormCreaPersona" class="row g-3 pb-3" action="form_crea_persona_action.php" method="POST" autocomplete="off" novalidate>

      <!-- fields -->
      <div class="col-12">
        <label for="nome" class="form-label">Nome *</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Mario" required>
        <div class="valid-feedback">Corretto!</div>
        <div class="invalid-feedback">Inserisci un nome</div>
      </div>
      <div class="col-12">
        <label for="email" class="form-label">Email *</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="mariorossi@gmail.com" required>
        <div class="valid-feedback">Corretto!</div>
        <div class="invalid-feedback">Inserisci un indirizzo email valido</div>
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Password *</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <!-- validazione password -->
        <div id="passwordStateContainer"></div>
      </div>

      <p class="mt-4 text-center">Tutti i campi con * sono obbligatori</p>

      <!-- submit form -->
      <div class="col-12 mt-4 text-center">
        <button type="submit" class="btn btn-outline-primary">Crea</button>
      </div>

    </form>
    <!-- fine-form -->
</div>





<!-- BLOCCO AGGIORNA PERSONA -->
<div id="aggiornaPersona" class="pt-5 mb-5">
  <h2 class="pt-4 h3"><mark>Aggiorna Persona</mark></h2>
  <hr class="mb-5">

    <!-- inizio-form -->
    <form id="tagFormAggiornaPersona" class="row g-3 pb-3" action="form_aggiorna_persona_action.php" method="POST" autocomplete="off" novalidate>

      <!-- fields -->
      <div class="col-12">
        <label for="idAggiorna" class="form-label">Person ID *</label>
        <input type="number" class="form-control" id="idAggiorna" name="idAggiorna" placeholder="10" required>
        <div class="valid-feedback">Formato corretto!</div>
        <div class="invalid-feedback">L'identificativo è un numero</div>
      </div>
      <div class="col-12">
        <label for="passwordCorrispondenteAggiorna" class="form-label">Inserisci la tua password *</label>
        <input type="password" class="form-control" id="passwordCorrispondenteAggiorna" name="passwordCorrispondenteAggiorna" placeholder="Password" required>
        <div class="valid-feedback">Formato corretto!</div>
        <div class="invalid-feedback">Inserisci la tua password correttamente</div>
      </div>

      <p class="mt-4 text-center">Tutti i campi con * sono obbligatori</p>

      <!-- submit form -->
      <div class="col-12 mt-4 text-center">
        <button type="submit" class="btn btn-outline-primary">Aggiorna</button>
      </div>

    </form>
    <!-- fine-form -->
</div>



<!-- BLOCCO CANCELLA PERSONA -->
<div id="cancellaPersona" class="pt-5 mb-5">
  <h2 class="pt-4 h3"><mark>Cancella Persona</mark></h2>
  <hr class="mb-5">
    <!-- inizio-form -->
    <form id="tagFormCancellaPersona" class="row g-3 pb-3" action="form_cancella_persona_action.php" method="POST" autocomplete="off" novalidate>

      <!-- fields -->
      <div class="col-12">
        <label for="idCancella" class="form-label">Person ID *</label>
        <input type="number" class="form-control" id="idCancella" name="idCancella" placeholder="10" required>
        <div class="valid-feedback">Formato corretto!</div>
        <div class="invalid-feedback">L'identificativo è un numero</div>
      </div>
      <div class="col-12">
        <label for="passwordCorrispondenteCancella" class="form-label">Inserisci la tua password *</label>
        <input type="password" class="form-control" id="passwordCorrispondenteCancella" name="passwordCorrispondenteCancella" placeholder="Password" required>
        <div class="valid-feedback">Formato corretto!</div>
        <div class="invalid-feedback">Inserisci la tua password correttamente</div>
      </div>

      <p class="mt-4 text-center">Tutti i campi con * sono obbligatori</p>

      <!-- submit form -->
      <div class="col-12 mt-4 text-center">
        <button type="submit" class="btn btn-outline-primary">Cancella</button>
      </div>

    </form>
    <!-- fine-form -->
</div>



</div> <!-- chiusura container -->



<!-- JAVASCRIPT -->
<script src="./js/tools.js"></script>
<script>
  // imposta il pattern dei tag input e valida la form onsubmit
  validazioneForm()

  // VALIDAZIONE PASSWORD ONKEYUP - CREA PERSONA
  const inputPassword = document.querySelector('#password')
  const passwordStateContainer = document.querySelector('#passwordStateContainer')

  inputPassword.addEventListener('keyup', function () {
    passwordValidation(inputPassword, passwordStateContainer)
  })
</script>



<?php require "./layout/footer.php"; ?>