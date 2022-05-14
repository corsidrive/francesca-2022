<?php require "./layout/head.php"; ?>

<div class="container mt-5"> <!-- apertura container -->

  <!-- inizio-form -->
  <form id="tagFormRegistraUtente" class="row g-3"  autocomplete="off" novalidate>

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
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>



<?php require "./layout/footer.php"; ?>