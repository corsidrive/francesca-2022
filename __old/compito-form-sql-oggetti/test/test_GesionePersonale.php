<?php

    include "../class/Person.php";
    include "../class/crud/GestionePersonale.php";

    $persona = new Person('mario    maria giovanna','a@b.it','1234');
    $GestionePersonale = new GestionePersonale();

    //$GestionePersonale->create($persona);
    $elencoDelPersonale = $GestionePersonale->readAll();


    print_r($elencoDelPersonale);

?>