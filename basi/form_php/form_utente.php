
<?php require "./layout/head.php";  ?>

<!-- inizio form -->
<form class="row g-3" action="form_utente_action.php" method="POST">
  <div class="col-md-6">
    <label for="email" class="form-label">Nome</label>
    <input type="email" name="nome"  class="form-control" id="email">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email"  class="form-control" id="email">
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
</div>

<!-- indirizzo inizio -->
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="indirizzo[address]"  class="form-control" id="address"
           placeholder="1234 Main St">
  </div>
 
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" name="indirizzo[city]" class="form-control" id="city">
  </div>
  <div class="col-md-4">
    <label for="provincia" class="form-label">Province</label>
    <select id="provincia" name="indirizzo[provincia]"  class="form-select">
      <option selected value="TO">Torino</option>
      <option value="RO" >Rome</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" name="indirizzo[zip]" class="form-control" id="inputZip">
  </div>

  <!-- indirizzo fine -->
  <div class="col-12">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="privacy"  id="privacy">
      <label class="form-check-label" value="true"  for="privacy">
          Consenso dati (privacy)
      </label>
    </div>
  </div>

  <div class="col-12">
       <p>Scegli il colore preferito</p>
      
       <div class="form-check">
            <input type="checkbox" value="#ff0000" name="colori[]" >
            <label for="colori"  >rosso</label>
       </div>
       <div class="form-check">
            <input type="checkbox" value="#00ff00" name="colori[]" >
            <label for="colori"  >verde</label>
       </div>
       <div class="form-check">
            <input type="checkbox" value="#00f" name="colori[]" >
            <label for="colori"  >blu</label>
       </div>

  </div>

  <div class="col-12">
       <p>Scegli un solo colore che detesti</p>
      
       <div class="form-check">
            <input type="radio" value="radio-#ff0000" name="colore_detestato" >
            <label for="colori"  >rosso</label>
       </div>
       <div class="form-check">
            <input type="radio" value="#00ff00" name="colore_detestato" >
            <label for="colori"  >verde</label>
       </div>
       <div class="form-check">
            <input type="radio" value="#00f" name="colore_detestato" >
            <label for="colori"  >blu</label>
       </div>

  </div>

  <div class="col-12">

  <div class="col-md-4">
       <!-- $viaggi[] = "CH"  --->
    <label for="provincia" class="form-label">Dove vorresti andare in vacanza ?</label>
    <select id="provincia" name="viaggi[]" multiple  class="form-select">
      <option selected value="CH">Crozia</option>
      <option value="UK" >Regno Unito</option>
      <option value="US" >Stati Uniti America</option>
    </select>
  </div>
  </div>



  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<!-- /fine form --> 
<?php require "./layout/footer.php"; ?>