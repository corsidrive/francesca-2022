<?php

class Cliente {
    
public $id;
public $nome;
public $cognome;
public $email;


public function __construct($nome,$cognome,$email) {
    $this->nome = $this->sanitizing($nome);
    $this->cognome = $cognome;
    $this->email = $email;
}

public function sanitizing($nome)
{
    $parti = explode(" ",$nome);
    // print_r($parti);
    $risultato = [];
    foreach ($parti as $parte) {
       if(strlen($parte) !== 0){
           $risultato[] = ucfirst($parte);
       };
    }
    return implode(" ",$risultato);
}




}
