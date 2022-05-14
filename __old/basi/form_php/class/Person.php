<?php

class Person {
    
public $id;
public $nome;
public $email;
public $password;

public function __construct($nome,$mail,$password) {
    $this->nome = $this->sanitizing($nome);
    $this->email = $mail;
    $this->password = $password;
}

public function sanitizing($nome)
{
    // "a/b/c" -> [a,b,c]
    // Mario giovanni maria -> ["Mario","giovanni","maria"]
    // ["Mario","Giovanni","Maria"] => "Mario Giovanni Maria"
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

/**
 
[
    "nome" => Mario   
    "email" => a@b.it 
    "password" => 1234

]
 */