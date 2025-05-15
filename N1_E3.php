<?php

/* Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna
true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”. */

function comprobarSiHayUnCaracterComunEnElArray(array $array, $caracter) {
    foreach ($array as $palabra) {
        if (stripos($palabra, $caracter) === false) {
            return false;
        } 
    }
    return true;
}

/* Prueba de función:
$arraydeprueba = array ("tomate", "tototo", "tjkdkd", "sggdtdjsb", "tataki", "bantrana", "manzana");
echo comprobarSiHayUnCaracterComunEnElArray($arraydeprueba, "t");
*/

?>