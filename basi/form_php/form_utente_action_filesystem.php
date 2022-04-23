<?php require "./layout/head.php";  ?>

<p>faro qualcosa con le informazioni</p>
<pre>

    <?php 
    print_r($_POST);

    #conversione da Array PHP a JSON
    $jsonFormatoTesto =json_encode($_POST,JSON_PRETTY_PRINT);
    
    # usiamo la mail come nome del file che salverà i dati
    $nome_file = $_POST['email'];

    # creiamo una cartella dove mettere i dati dei form compilati
    if(!file_exists("../json-data")){
        mkdir("../json-data",0777,true);
    }
    
    # salviamo i file json
    file_put_contents("../json-data/$nome_file.json",$jsonFormatoTesto);
    
    # elenca i file presenti nella cartella dei form compilati
    $elencoFile = scandir("../json-data");

    print_r($elencoFile);
    
    ?>


</pre>
<?php require "./layout/footer.php"; ?>