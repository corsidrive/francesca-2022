<?php

/**
 *  
 * {
        "nome": "Alagna Valsesia",
        "codice": "002002",
        "zona": {
            "codice": "1",
            "nome": "Nord-ovest"
        },
        "regione": {
            "codice": "01",
            "nome": "Piemonte"
        },
        "provincia": {
            "codice": "002",
            "nome": "Vercelli"
        },
        "sigla": "VC",
        "codiceCatastale": "A119",
        "cap": [
            "13021"
        ],
        "popolazione": 671
    },
 *
 * @param array $comuni
 * @return void
 */
function comuniTable(array $comuni)
{

?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">zona</th>
                <th scope="col">regione</th>
                <th scope="col">provincia</th>
                <th scope="col">popolazione</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comuni as $comune) { ?>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">zona</th>
                    <th scope="col">regione</th>
                    <th scope="col">provincia</th>
                    <th scope="col">popolazione</th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }



function getNome($comune)
{
    
}
