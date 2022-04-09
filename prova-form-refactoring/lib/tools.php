<?php

function is_cap(string $cap):bool {

    $cap = trim($cap);
    $res = preg_match("/^[0-9]{5}$/",$cap);

    return $res === 1;
}


function is_comune(string $comune) {
    $comune = trim($comune);

    $res = preg_match("/[a-zA-Z]*/",$comune);

  

    return $res === 1;
}