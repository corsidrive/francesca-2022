<?php

/**
 * @return true se la mail esiste già nel database
 * @return false se la mail non esiste nel database
 */
function email_exists(object $connPDO, string $email):bool {
    $res = $connPDO->prepare("SELECT * FROM utenti WHERE email=?");
    $res->execute([$email]); 
    return $res->fetchColumn();
}

/**
 * NON USATA
 * @return true se è una parola
 * @return false se non è una parola
 */
function is_parola(string $inputUtente):bool {
    $res = preg_match("/^[a-z 'àèéìòùç]*$/", $inputUtente);
    return $res;
}

?>