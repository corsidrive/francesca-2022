<?php

function is_cap(string $cap):bool {
    $cap = trim($cap);
    $res = preg_match("/^[0-9]{5}$/",$cap);
    return $res === 1;
}

function is_comune(string $comune) {
    $comune = trim($comune);
    if (mb_strlen($comune) === 0) {
        return false;
    } 
    // $res = preg_match("/''/",$comune);

    $res = preg_match("/^[a-zA-Zàèìòù' ]*$/",$comune);
    return $res === 1;
}