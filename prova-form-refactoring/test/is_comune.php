<?php
require_once "../lib/tools.php";
echo "<h3>".basename(__FILE__)."</h3>";
$tests = [
    ["test fallito per ","Torino",true,__LINE__],
    ["test fallito per ","Abbadia San Salvatore",true,__LINE__],
    ["test fallito per ",'$Torino',false,__LINE__],
    ["test fallito per ",'To&rino',false,__LINE__],
    ["test fallito per stringa vuota",'',false,__LINE__],
    ["test fallito per ",'santià',true,__LINE__],
    ["test fallito per ",'Santià',true,__LINE__],
    ["test fallito per ",'Santia',true,__LINE__],
    ["test fallito per ",'santia',true,__LINE__],
    ["test fallito per ",'San Giovanni',true,__LINE__],
    ["test fallito per ",'l\'aquila Giovanni',true,__LINE__],
    ["test fallito per ",'l\'Aquila',true,__LINE__],
    // ["test fallito per ",'l\'\'Aquila',false,__LINE__],
];

foreach ($tests as $test) {

    $cavia = $test[1];
    $risultato = $test[2];
    $descrizione = $test[0];


    if(is_comune($cavia) !== $risultato){
        echo $descrizione . $cavia . " linea:{$test[3]}<br>";
    }
}

