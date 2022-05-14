<?php require "./layout/head.php"; ?>



<h2 class="mt-5">Registrazione Utente</h2>
<div class="container mt-5"> <!-- apertura container -->

  <!-- inizio-form -->
  <form id="tagFormRegistraUtente" class="row g-3" action="javascript:;ti" onsubmit="formRegistraUtente(this)" autocomplete="off" novalidate>

    <!-- fields -->
    <div class="col-12">
      <label for="nomeUtente" class="form-label">Nome *</label>
      <input type="text" class="form-control" id="nomeUtente" name="nomeUtente" placeholder="Mario" required>
      <div class="valid-feedback">Corretto!</div>
      <div class="invalid-feedback">Inserisci un nome</div>
    </div>
    <div class="col-12">
      <label for="cognomeUtente" class="form-label">Cognome *</label>
      <input type="text" class="form-control" id="cognomeUtente" name="cognomeUtente" placeholder="Rossi" required>
      <div class="valid-feedback">Corretto!</div>
      <div class="invalid-feedback">Inserisci un cognome</div>
    </div>
    <div class="col-12">
      <label for="emailUtente" class="form-label">Email *</label>
      <input type="email" class="form-control" id="emailUtente" name="emailUtente" placeholder="mariorossi@gmail.com" required>
      <div class="valid-feedback">Corretto!</div>
      <div class="invalid-feedback">Inserisci un indirizzo email valido</div>
    </div>

    <p class="mt-4 text-center">Tutti i campi con * sono obbligatori</p>

    <!-- submit form -->
    <div class="col-12 mt-4">
      <button type="submit" class="btn btn-outline-primary">Registrati</button>
    </div>

  </form>
  <!-- fine-form -->

  <div id="rispostaFormRegistraUtente" class="py-5"></div>

</div> <!-- chiusura container -->



<!-- JAVASCRIPT -->
<script src="./js/tools.js"></script>
<script>
  // tag form e tutti i tag input che contiene
  const tagFormRegistraUtente = document.getElementById('tagFormRegistraUtente')
  const allTagInputFormRegistrati = tagFormRegistraUtente.querySelectorAll('input')

  // imposta pattern tag input in base a type
  impostaInputPattern(allTagInputFormRegistrati)

  // contenitore risposta php
  const contenitoreRispostaFormRegistraUtente = document.getElementById('rispostaFormRegistraUtente')

  // form action post
  let formActionPOSTRegistraUtente = './form_action/form_action_registrati.php'

  // INVIA FORM
  function formRegistraUtente() {
    getDataToSendForm(tagFormRegistraUtente, allTagInputFormRegistrati, formActionPOSTRegistraUtente, contenitoreRispostaFormRegistraUtente)
  }
</script>



<?php require "./layout/footer.php"; ?>