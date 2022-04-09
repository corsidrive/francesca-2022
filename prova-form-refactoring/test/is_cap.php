<?php
include "../lib/tools.php";

if(is_cap('10100') !== true){
    echo "fallito 10100 è un cap valido<br>";
}

if(is_cap(' 10100  ') !== true){
    echo "fallito 10100 con spazi davanti e dietro<br>";
}

if(is_cap(' 10100') !== true){
    echo "fallito 10100 con spazi davanti e dietro<br>";
}

if(is_cap('20150   ') !== true){
    echo "fallito 10100 con spazi davanti e dietro<br>";
}

if(is_cap('10155') !== true){
    echo "fallito 10155 è un cap valido<br>";
}

if(is_cap('casa') !== false){
    echo "fallito casa non è un cap valido<br>";
}

if(is_cap('  casa   ') !== false){
    echo "fallito casa non è un cap valido<br>";
}

if(is_cap('<br> casa   ') !== false){
    echo "fallito casa non è un cap valido<br>";
}

if(is_cap('300000') !== false){
    echo "fallito 300000 non è un cap valido<br>";
}