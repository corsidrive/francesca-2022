<?php

function person_exists(object $connPDO, Person $persona) {
    $res = $connPDO->query("SELECT * FROM person WHERE nome='$persona->nome' AND email='$persona->email';");
    $res->execute();

    if($res->rowCount() === 0) {
        return false;
    } else {
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}

function id_password_exists(object $connPDO, $personId, $password) {
    $res = $connPDO->query("SELECT * FROM person WHERE id='$personId' AND password='$password';");
    $res->execute();

    if($res->rowCount() === 0) {
        return false;
    } else {
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}

?>