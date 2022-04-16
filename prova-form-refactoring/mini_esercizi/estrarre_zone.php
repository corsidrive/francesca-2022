<?php 

include "../lib/file_importer.php";
/**
 * Estrarre l'elenco delle zone da comuni.json
 */
$comuni = importFromJSONFile('../comuni.json');

$nomiZone = array_unique(array_map('estrazioneNomeZona',$comuni));

function estrazioneNomeZona($comune)
{
    return $comune['zona']['nome'];
}