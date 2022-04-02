<?php

// Index Array
$colori = ['red','green'];

print_r($colori);

echo $colori;

// Associative Array
$persona = array(
    'nome' => "Mario",
    'cognome' => "Rossi",
    "ordini" => 10,
    "peso" => 50.5,
    "data di nasciata" => new DateTime('2042-03-01'),
);



echo "<pre>";
print_r($persona);
echo "</pre>";

echo "<p>Il mio nome è ".$persona['nome']."<p>"; 


foreach ($persona as $label => $info ) {
    if(is_string($info) || is_numeric($info)){
        echo "<b>$label</b>: $info<br>";
    }
}




$personaConIndexArray = ["Mario","Rossi",new DateTime('1942-03-01')];
echo "<p>Il mio nome è ".$personaConIndexArray[0]."<p>"; 

foreach ($personaConIndexArray as $key => $value) {

    if ($value instanceof DateTime) {
       // document.getElementById() --> oggetto.metodo()
       // oggetto -> metodo() 
        echo "<b>$key</b>: ".$value->format('l j F Y');
    } else {
        echo "<b>$key</b>: $value<br>";
    }
    
}   


