<?php

class Person {

    public $id;
    public $nome;
    public $email;
    public $password;

    public function __construct($nome,$email,$password) 
    {
        $this->nome = $this->sanitizing($nome);
        $this->email = $email;
        $this->password = $password;
    }

    public function sanitizing($nome) 
    {
        $partiNome = explode(" ", mb_strtolower($nome));

        $risultato = [];
        foreach ($partiNome as $parteNome) {
            if(strlen($parteNome) !== 0) {
                $risultato[] = ucfirst($parteNome);
            }
        }

        return implode(" ", $risultato);
    }

}

?>