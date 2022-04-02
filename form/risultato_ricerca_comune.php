<?php 



// Ago
$comuneDaCercare = $_GET['comune'];

// Paiaio

$comuni = file_get_contents("comuni.json");
$comuni = json_decode($comuni,true);

$comuni = array_slice($comuni,0,10);


//print_r($comuni);

foreach ($comuni as $comune) {
    $cercaIn = $comune['nome'];
    if($cercaIn == $comuneDaCercare){
        echo "Trovato: $cercaIn <br>";
    }
}