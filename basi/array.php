<?php


$title = "Array in php";
$colori = ['#f00','#0f0','#00f'];
$colori = array('#f00','#0f0','#00f');
$rosso = $colori[0];
$verde = $colori[1];
//print_r($colori);

// colori.foreEach()
// foreach ($colori as $indice => $colore) {
//     echo "all'indice $indice ho il  <b style='color:$colore'>colore</b><br>";
// }


?>

<!DOCTYPE html>


<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-3 <?= $colori ?>"  >
        <h2><?= $title ?></h2>
        <p>Index Array e Associative Array</p>
        <ul class="list-group">
            <!-- inizio loop -->
            <?php foreach($colori as $indice => $colore) { ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Il codice colore è: <?= $colore?>
                    <span style="background-color:<?=$colors?>!important"  class="badge bg-primary rounded-pill">12</span>
                </li>
            
            <?php } ?>

            
            <!-- fine loop -->
            
        </ul>
    </div>

</body>

</html>