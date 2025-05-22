<?php
declare(strict_types=1);

function checkIfAllWordsIncludeChar(array $array, string $caracter): bool {
    foreach ($array as $palabra) {
        if (str_contains($palabra, $caracter) === false) {
            return false;
        } 
    }
    return true;    
}


$arraydeprueba = array ("tomate", "tototo", "tjkdkd", "sggdtdjsb", "tataki", "bantrana", "mantzana");
echo checkIfAllWordsIncludeChar($arraydeprueba, "t");


?>