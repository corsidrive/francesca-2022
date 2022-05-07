<?php require "./layout/head.php"; ?>



<h2 class="mt-5">Annulla Registrazione Utente</h2>
<div class="container mt-5"> <!-- apertura container -->

  <!-- inizio-form -->
  <form id="tagFormAnnullaRegistrazioneUtente" class="row g-3" action="javascript:;" onsubmit="formAnnullaRegistrazione(this)" autocomplete="off" novalidate>

    <!-- fields -->
    <div class="col-12">
      <label for="emailUtenteRegistrato" class="form-label">Email già registrata *</label>
      <input type="email" class="form-control" id="emailUtenteRegistrato" name="emailUtenteRegistrato" placeholder="mariorossi@gmail.com" required>
      <div class="valid-feedback">Corretto!</div>
      <div class="invalid-feedback">Inserisci un indirizzo email valido</div>
    </div>

    <p class="mt-4 text-center">Tutti i campi con * sono obbligatori</p>

    <!-- submit form -->
    <div class="col-12 mt-4">
      <button type="submit" class="btn btn-outline-primary">Annulla Registrazione</button>
    </div>

  </form>
  <!-- fine-form -->

  <div id="rispostaFormAnnullaRegistrazioneUtente" class="py-5"></div>

</div> <!-- chiusura container -->



<!-- JAVASCRIPT -->
<script src="./js/tools.js"></script>
<script>
  // tag form e tutti i tag input che contiene
  const tagFormAnnullaRegistrazioneUtente = document.getElementById('tagFormAnnullaRegistrazioneUtente')
  const allTagInputFormAnnullaRegistrazioneUtente = tagFormAnnullaRegistrazioneUtente.querySelectorAll('input')

  // imposta pattern tag input in base a type
  impostaInputPattern(allTagInputFormAnnullaRegistrazioneUtente)

  // contenitore risposta php
  const contenitoreRispostaFormAnnullaRegistrazioneUtente = document.getElementById('rispostaFormAnnullaRegistrazioneUtente')

  // form action post
  let formActionPOSTAnnullaRegistrazioneUtente = './form_action/form_action_annulla_registrazione.php'


  // INVIA FORM
  function formAnnullaRegistrazione() {
    getDataToSendForm(tagFormAnnullaRegistrazioneUtente, allTagInputFormAnnullaRegistrazioneUtente, formActionPOSTAnnullaRegistrazioneUtente, contenitoreRispostaFormAnnullaRegistrazioneUtente)
  }
</script>



<?php require "./layout/footer.php"; ?>