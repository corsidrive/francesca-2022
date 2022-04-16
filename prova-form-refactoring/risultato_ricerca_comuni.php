<?php

$input_utente = $_GET['comune_cap'];





foreach ($comuni as $comune) {
    $nome = $comune['nome'];
    $siglaProvincia = $comune['sigla'];
    $regione = $comune['regione']['nome'];
    $caps = $comune['cap'];
    $listaCap = implode(", ", array_values($caps));

    /**
     * is_comune
     *      cerca($comuneDacercare,$nome)
     * 
     * is_cap()
     *       
     */
    if(ctype_alpha($comuneDaCercare) || !preg_match("/[0-9]/", $comuneDaCercare) && preg_match("/[àèéìòù']/", $comuneDaCercare) && !preg_match('/[\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $comuneDaCercare)) {
        //ricerca per nome
        $cercaInComune = str_replace(' ', '', mb_strtolower($comune['nome']));
        if ($cercaInComune === $comuneDaCercare) {
            echo "Trovato per <strong>$input_utente</strong>: <br>$nome, $siglaProvincia, $regione, $listaCap.<br><br>";
            $comuneTrovato = $nome;
        }
    } else if (ctype_digit($comuneDaCercare)) {
        //ricerca per cap
        for ($i=0; $i < count($caps); $i++) { 
            $cercaInCap = $caps[$i];

            if ($cercaInCap === $comuneDaCercare) {
                echo "Trovato <strong>$input_utente</strong>: <br>$nome, $siglaProvincia, $regione, $listaCap.<br><br>";
                $comuneTrovato = $nome;
            }
        }
    }
}


//se non trovato
if ($comuneTrovato === NULL && $comuneDaCercare !== '') {
    if(ctype_alpha($comuneDaCercare) || !preg_match("/[0-9]/", $comuneDaCercare) && preg_match("/[àèéìòù']/", $comuneDaCercare) && !preg_match('/[\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $comuneDaCercare)) {
        echo "Comune <strong>$input_utente</strong> non trovato";
    } else if (ctype_digit($comuneDaCercare)) {
        echo "Cap <strong>$input_utente</strong> non trovato";
    }
}

?>

