<?php require "./layout/head.php"; ?>


<h2 class="mt-5 px-md-4">Cancella Persona - action</h2>
<div class="container mt-5 px-md-4"> <!-- apertura container -->

<?php

    include "./class/crud/GestionePersonale.php";

    $personIdCancella = $_POST['idCancella'];
    $passwordCorrispondenteCancella = $_POST['passwordCorrispondenteCancella'];

    $GestionePersonale = new GestionePersonale();
    $res = $GestionePersonale->delete($personIdCancella, $passwordCorrispondenteCancella);

    if ($res !== false && $res !== 'notFound') {
        echo "<div class='alert alert-success mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Persona cancellata!</h4><hr><p class='mb-0'>Hai cancellato {$res['nome']}, email {$res['email']}</p></div>";
    } else if ($res === false) {
        echo "<div class='alert alert-danger mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Database non connesso</h4><hr><p class='mb-0'>Riprova più tardi.</p></div>";
    } else if ($res === 'notFound') {
        echo "<div class='alert alert-warning mx-auto mt-5' role='alert' style='max-width:80%;'><h4 class='alert-heading'>Persona non trovata</h4><hr><p class='mb-0'>Id inesistente o password errata</p></div>";
    }
    
?>

</div> <!-- chiusura container -->


<?php require "./layout/footer.php"; ?>