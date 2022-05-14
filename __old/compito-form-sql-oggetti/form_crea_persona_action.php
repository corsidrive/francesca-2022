<?php require "./layout/head.php"; ?>


<h2 class="mt-5 px-md-4">Crea Persona - action</h2>
<div class="container mt-5 px-md-4"> <!-- apertura container -->

<?php

    include "./class/Person.php";
    include "./class/crud/GestionePersonale.php";

    $person = new Person($_POST['nome'],$_POST['email'],$_POST['password']);

    $GestionePersonale = new GestionePersonale();
    $res = $GestionePersonale->create($person);

    if (is_array($res)) {
        echo "<div class='alert alert-success mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Registato con successo!</h4><hr><p class='mb-0'>{$res['nome']}, email {$res['email']} - <strong>il tuo Person ID è {$res['id']}</strong></p></div>";
    } else if ($res === false) {
        echo "<div class='alert alert-danger mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Database non connesso</h4><hr><p class='mb-0'>Riprova più tardi.</p></div>";
    } else if (is_int($res)) {
        echo "<div class='alert alert-warning mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Nome e Email già presenti nel database</h4><hr><p class='mb-0'>Person id = $res</p></div>";
    }
    
?>

</div> <!-- chiusura container -->


<?php require "./layout/footer.php"; ?>