<?php




/**
 * $coloreAuto = 'red';
 * classe serve a 
 * descrivere dell'oggetto
 * progetto dell' automobile / la fabbrica
 */
class Automobile {
    /** proprietà o attributi */
    public $colore;
    public $posizione = 0;
    public $targa;
    public $proprietario;

    /** metodi quello che un oggetto può fare */
    public function avanti($metri){
        // la posizione di questa Automobile
        // diventerà uguale alla sua posizione attuale piu 
        // i metri percorsi

        // la posizione di questa Automobile
        // $posizione = $posizione + $metri
        $this->posizione += $metri;
    }
}

class Maglietta {
    public $colore;
    public $taglia;
    public $prezzo;
} 


// istanza 
// const colori = new Array();
$autoMario = new Automobile();
$autoMario->colore = 'red';
$autoMario->targa = 'xyz';
$autoMario->posizione = 100;
$autoMario->proprietario = "Mario";

print_r($autoMario);

$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);
$autoMario->avanti(100);

print_r($autoMario);

if($autoMario->posizione > 1000){
    echo "vinto !!!";
}


$autoGianni = new Automobile();
$autoGianni->colore = 'green';
$autoGianni->targa = 'abc';
$autoGianni->posizione = 0;


$m = new Maglietta();
$m->colore = "red";
$m->taglia = "XL";



