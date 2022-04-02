<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basi PHP</title>
</head>

<body>
    <?php
    // const nome = "Mario"
    $nome = "Mario";
    $cognome = 'Rossi';

    // frase = "Benvenuto" + nome 
    // frase = `Benvenuto ${nome}`
    $frase = "Benvenuto $nome $cognome, come va ?";
    $altraFrase = 'Benvenuto $nome $cognome, come va ?';
    $somma = 5 + 5;

    $fraseConPunti = "Benvenuto " . $nome . " " . $cognome . ", come va ?";
    echo "$frase <br>";
    echo $altraFrase;
    /* FINE PHP */
    // FINE PHP
    ?>
    <!--  INIZIO HTML -->

    <h1><?php echo $nome; ?><h1>

            <!-- <?php echo "<h1>$nome</h1>" ?> -->

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$nome $cognome" ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
</body>

</html>