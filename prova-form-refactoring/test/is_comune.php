<?php
include "../lib/tools.php";

$tests = [
    ["test fallito per ","Torino",true],
    ["test fallito per ","Abbadia San Salvatore",true],
    ["test fallito per ",'$Torino',false],
    ["test fallito per ",'To&rino',false],
    ["test fallito per stringa vuota",'',false],
    ["test fallito per ",'santià',true],
    ["test fallito per ",'Santià',true],
    ["test fallito per ",'Santia',true],
    ["test fallito per ",'santia',true],
    ["test fallito per ",'San Giovanni',true],
    ["test fallito per ",'l\'aquila Giovanni',true],
    ["test fallito per ",'l\'Aquila',true],
];

foreach ($tests as $test) {

    $cavia = $test[1];
    $risultato = $test[2];
    $descrizione = $test[0];


    if(is_comune($cavia) !== $risultato){
        echo $descrizione . $cavia . "<br>";
    }
}

