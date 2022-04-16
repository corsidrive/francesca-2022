<?php
include_once "../lib/tools.php";
echo "<h3>".basename(__FILE__)."</h3>";
/**
 * Scrivere almeno tre lettere 
 */

$tests = [
    //utente scrive input ,  Nome comune dove stai cerando ,risultato atteso
    ["Tor","Torino",true,__LINE__],
    ["tor","Torino",true,__LINE__],
    ["Tor","Tortona",true,__LINE__],
    ["Tor   ","tortona",true,__LINE__],
    ["Tor","Tolentino",false,__LINE__],
    ["Tor","tolentino",false,__LINE__],
    ["T","Torino",false,__LINE__],
    ["T   ","Torino",false,__LINE__],
    ["   T   ","Torino",false,__LINE__],
    ["t","Torino",false,__LINE__],
    ["to  ","Torino",false,__LINE__],
    ["to","Torino",false,__LINE__],
    ["Abano Terme","Abano Terme",true,__LINE__],
    ["A","Abano Terme",false,__LINE__],
    ["Ab","Abano Terme",false,__LINE__],
    ["Aba","Abano Terme",true,__LINE__],
    ["Aban","Abano Terme",true,__LINE__],
    ["Aba","Abano Terme",true,__LINE__],
    ["Ala ","Alà dei Sardi",true,__LINE__],
    ["Ala ","Alà dei Sardi",true,__LINE__],
];

$fallimenti = 0;
foreach ($tests as $test) {

    list($parolaDaCarcare,$parolaDaConfrontare,$risultatoAtteso,$linea) = $test;
    
    if(!(cerca($parolaDaCarcare,$parolaDaConfrontare) === $risultatoAtteso)){
        $fallimenti++;
        echo "fallita ricerca di $parolaDaCarcare in $parolaDaConfrontare linea: $linea <br>";
    }; 
}
echo "fallimenti: $fallimenti su ".count($tests)."<br>";


// if(cerca('Tor','Tortona') === true; 
// cerca('Tor  ','Tortona') === true; 
// cerca('Tor','Torino') === true; 
// cerca('tor','Torino') === true; 
// cerca('no','Avellino') === false; 


// cerca_cap('10100'.'10100') === true;
