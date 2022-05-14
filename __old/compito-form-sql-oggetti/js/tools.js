/**
 * @param {NodeListOf<HTMLInputElement>} inputTagNodeList
 * @returns inserisce il pattern corretto in base al tipo di tag input
 */
 function impostaInputPattern(inputTagNodeList) {
    inputTagNodeList.forEach(inputTag => {
        let inputType = inputTag.type
        if(inputType === 'text') {
            inputTag.setAttribute("pattern", "[a-zA-Z' àèéìòùçÇÀÈÉÌÒÙ]*")
        }
        if(inputType === 'number') {
          inputTag.setAttribute("pattern", "[0-9].{0,10}")
        }
        if(inputType === 'email') {
            inputTag.setAttribute("pattern", "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$")
        }
        if(inputType === 'password') {
            inputTag.setAttribute("pattern", "(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*@#$%^&+=_?!\-]).{8,}")
        }
    });
}


/**
 * @param {InputElementTypePassword} inputPassword
 * @param {Element} passwordStateContainer
 * @returns innerHTML di passwordStateContainer con messaggio per migliorare la password
 */
function passwordValidation(inputPassword, passwordStateContainer) {
    let inputPasswordValue = inputPassword.value;
    if(inputPasswordValue === '') {
      passwordStateContainer.innerHTML = ""
    } else if (inputPasswordValue !== '' && !inputPasswordValue.match("(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*@#$%^&+=_?!\'\-])")) {
      passwordStateContainer.innerHTML = "<div class='alert mt-2 alert-danger' role='alert'><p class='mb-0'>Deve contenere almeno un numero, un carattere speciale, una lettera minuscola e una maiuscola</p></div>"
    } else if (inputPasswordValue !== '' && inputPasswordValue.match("(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*@#$%^&+=_?!\'\-])") && !inputPasswordValue.match(".{8,}")) {
      passwordStateContainer.innerHTML = "<div class='alert mt-2 alert-warning' role='alert'><p class='mb-0'>Deve avere almeno 8 caratteri</p></div>"
    } else if (inputPasswordValue !== '' && inputPasswordValue.match("(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*@#$%^&+=_?!\'\-])") && inputPasswordValue.match(".{8,}")) {
      passwordStateContainer.innerHTML = "<div class='alert mt-2 alert-success' role='alert'><p class='mb-0'>Password sicura</p></div>"
    }
}


/**
 * ONLOAD IMPOSTA IL PATTERN DEI TAG INPUT E CREA L'EVENTO ONSUBMIT PER VALIDARE LA FORM
 */
function validazioneForm() {
  const allTagForm = document.querySelectorAll('form')

  allTagForm.forEach(tagForm => {
    // tag form e tutti i tag input che contiene
    const allTagInputTagForm = tagForm.querySelectorAll('input:enabled')

    // imposta pattern tag input in base a type
    impostaInputPattern(allTagInputTagForm)


    // LA FORM VIENE INVIATA SOLO SE TUTTI GLI INPUT SONO VALIDI
    tagForm.addEventListener('submit', function (event) {
      // se tutti gli input sono validi, invia la form
      // altrimenti aggiunge la validazione e cancella l'evento submit
      if(tagForm.querySelectorAll(':invalid').length > 0) {
        tagForm.classList.add('was-validated')
        event.preventDefault();
      }
    })

  })
}