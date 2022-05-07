<?php

# include tools
include "./lib/tools.php";
include "../configuration.php";

# INPUT UTENTE METODO POST
$utenteEmailRegistrato = $_POST['emailUtenteRegistrato'];

# CONNESSIONE DATABASE SQL
include "./configuration.php";

try {
    # PROVA DI CONNESSIONE
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    # INIZIO QUERY
    if (!email_exists($conn, $utenteEmailRegistrato)) {
        // avviso email non registrata
        echo    "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                    <svg width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-3' viewBox='0 0 16 16' role='img' aria-label='L'indirizzo email inserito non è registrato'>
                        <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                    </svg>
                    <div>L'indirizzo email inserito non è registrato</div>
                </div>";
    } else {
        // fa vedere l'utente che verrà eliminato dalla tabella sql
        $utenti = $conn->query("SELECT * FROM utenti WHERE email='$utenteEmailRegistrato'"
                        );
        $utenteCancellato = NULL;
        foreach ($utenti as $rigaUtenteCancellato) {
            $utenteCancellato = "{$rigaUtenteCancellato['nome']} {$rigaUtenteCancellato['cognome']}";
            $utenteCancellato = strtoupper($utenteCancellato);
        }
        // elimina l'utente dalla tabella sql
        $utenti = $conn->query("DELETE FROM utenti WHERE email='$utenteEmailRegistrato'"
                        );
        // avviso utente cancellato
        echo    "<div class='alert alert-success d-flex align-items-center' role='alert'>
                    <svg width='24' height='24' fill='currentColor' class='bi bi-check-circle-fill flex-shrink-0 me-3' viewBox='0 0 16 16' role='img' aria-label='Registrazione annullata'>
                        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                    </svg>
                    <div>$utenteCancellato: registrazione annullata</div>
                </div>";

    }
    #FINE QUERY


} catch(PDOException $e) {
    # SE ERRORE DI CONNESSIONE
    echo "Codice errore: ".$e->getCode()."<br>Errore nel file: ".$e->getFile()."<br>";
    echo "Errore la connessione non va: ".$e->getMessage()."<br>";
}

?>