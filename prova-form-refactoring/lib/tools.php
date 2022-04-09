<?php

function is_cap(string $cap): bool
{
    $cap = trim($cap);
    $res = preg_match("/^[0-9]{5}$/", $cap);
    return $res === 1;
}

function is_comune(string $comune)
{


    $comune = trim($comune);
    if (mb_strlen($comune) === 0) {
        return false;
    }
    // $res = preg_match("/''/",$comune);

    $res = preg_match("/^[a-zA-Zàèìòù' ]*$/", $comune);
    return $res === 1;
}


function cerca($parolaDaCercare, $parolaDaConfrontare)
{

    $parolaDaCercare = trim($parolaDaCercare);
     if (strlen($parolaDaCercare) >= 3) {
        $parolaDaCercare = sostituisciAccentate($parolaDaCercare);
        $parolaDaConfrontare = sostituisciAccentate($parolaDaConfrontare);
        return preg_match("/" . $parolaDaCercare . "/i", $parolaDaConfrontare) === 1;
    } else {
        return false;
    }
}

/**
 * Fonte della soluzione
 * https://stackoverflow.com/questions/3371697/replacing-accented-characters-php
 * https://stackoverflow.com/questions/18123501/replacing-accented-characters-with-plain-ascii-ones
 * @param string $originale
 * @return void
 */
function sostituisciAccentate(string $originale)
{
    $turco = ['Ğ'=>'G', 'İ'=>'I', 'Ş'=>'S', 'ğ'=>'g', 'ı'=>'i', 'ş'=>'s', 'ü'=>'u'];
    $rumeno = ['ă'=>'a', 'Ă'=>'A', 'ș'=>'s', 'Ș'=>'S', 'ț'=>'t', 'Ț'=>'T'];
    $unwanted_array = array(
        'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
        'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
        'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y'
    );
    return strtr($originale, $unwanted_array);
}
