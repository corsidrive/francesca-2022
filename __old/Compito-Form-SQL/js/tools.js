/**
 * @param {string} formActionPOST 
 * @param {string} datiPOST
 * @param {HTMLElement} contenitoreRisposta
 * @returns INVIA LA RICHIESTRA A PHP CHE LA ELABORA E POI INSERISCE LA RISPOSTA NELL'ELEMENTO HTML PASSATO ALLA FUNZIONE
 */
function sendForm(formActionPOST, datiPOST, contenitoreRisposta) {
    // nuova richiesta a php
    let xmlhttp = new XMLHttpRequest() // Browser - Client HTTP

    // xmlhttp.readyState --> 0

    // http://elenco.utenti.php ---> riposta
    // invia richiesta a php metodo post
    xmlhttp.open("POST", formActionPOST, true)
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


    // xmlhttp.readyState --> 1 - in attesa el.style.display = block
    //  xmlhttp.readyState --> 2 - progress
    // 
    xmlhttp.send(datiPOST)

    // visualizza i dati
    /**  */
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // el.style.display = none;
            contenitoreRisposta.innerHTML = xmlhttp.responseText
        }
    }
}

/**
 * @param {string} inputUtente.value
 * @returns INPUT UTENTE SENZA SPAZI ALL'INZIO E ALLA FINE E SENZA SPAZI MULTIPLI ALL'INTERNO, IN LOWERCASE
 */
function formatoInputUtente(parola) {
    let res = parola.trim().replace(/\s\s+/g, ' ').replace(/''+/g, "'").toLowerCase()
    return res
}


/**
 * @param {NodeListOf<HTMLInputElement>} inputTagNodeList
 * @returns inserisce il pattern corretto in base al tipo di tag input
 */
function impostaInputPattern(inputTagNodeList) {
    inputTagNodeList.forEach(inputTag => {
        let inputType = inputTag.type
        if(inputType === 'text') {
            inputTag.setAttribute("pattern", "[a-zA-Z' àèéìòùç]*")
        }
        if(inputType === 'email') {
            inputTag.setAttribute("pattern", "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$")
        }
    });
}


/**
 * @param {HTMLFormElement} formTag
 * @param {NodeListOf<HTMLInputElement>} allTagInputForm
 * @param {String} formActionPercorsoFile
 * @param {HTMLElement} contenitoreRispostaPHP
 * @returns CONTROLLA L'INPUT DELL'UTENTE, SE CORRETTO, INVIA LA FORM CON METODO POST E RESTITUISCE LA RISPOSTA DI PHP
 */
function getDataToSendForm(formTag, allTagInputForm, formActionPercorsoFile, contenitoreRispostaPHP) {

    // CAMPI INPUT VALIDAZIONE
    formTag.classList.add('was-validated')
    // seleziona i campi input validi
    const allValidTagInputForm = formTag.querySelectorAll('input:valid')
    // length campi input e length campi input:valid
    let inputsLength = allTagInputForm.length
    let inputsValidLength = allValidTagInputForm.length

    // ottiene INPUT UTENTE nel formato corretto e COMPONE STRINGA METODO POST
    let stringInputDati = ''
    allTagInputForm.forEach(inputTag => {
        let inputName = inputTag.name
        let inputType = inputTag.type
        let inputValue = ''
        if(inputType === 'text') {
            inputValue = formatoInputUtente(inputTag.value)
        } else {
            inputValue = inputTag.value
        }
        let inputDati = `${inputName}=${inputValue}&`
        stringInputDati += inputDati
    });
    let metodoPOSTdati = stringInputDati.slice(0, -1) // toglie la & finale

    // se numero campi input uguale numero campi input validi, INIVIA I DATI
    if (inputsLength === inputsValidLength) {
        sendForm(formActionPercorsoFile, metodoPOSTdati, contenitoreRispostaPHP)
      } else {
        // non invia i dati e pulisce l'eventuale risposta di dati inviati precedentemente
        console.log('errato')
        contenitoreRispostaPHP.innerHTML = ''
      }
}