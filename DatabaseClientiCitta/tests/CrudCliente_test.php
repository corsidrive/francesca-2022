<?php 
require_once "../config.php";
require "../class/crud/GestioneClienti.php"; 
require "../class/Cliente.php";  
require "../sql/backup.php";  

$crud = new GestioneClienti();
$cliente = new Cliente("Test","Mario","tm@a.it"); 
 
$crud->create($cliente);  

// $clienti = $crud->readAll(); 
$cliente = $crud->read(20); 

print_r($cliente);    