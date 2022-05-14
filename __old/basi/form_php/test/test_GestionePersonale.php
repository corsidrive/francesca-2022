<?php 
include "../class/Person.php";
include "../class/crud/GestionePersonale.php";

$persona = new Person('mario   maria giovanna','a@b.it','1234');
$gestionePersonale = new GestionePersonale();

// $gestionePersonale->create($persona);
$elenco_del_personale = $gestionePersonale->readAll();
// $gestionePersonale->crea($persona);
// $gestionePersonale->create($persona);

print_r($elenco_del_personale);

