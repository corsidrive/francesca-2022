<?php


function importFromJSONFile(string $path,$associative = true):array {
    $jsonString = file_get_contents($path);
    $dataConvertedInPHPArray = json_decode($jsonString, $associative);

    return $dataConvertedInPHPArray;
}


?>