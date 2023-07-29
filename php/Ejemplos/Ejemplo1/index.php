<?php 
// Diseñar un algoritmo que dada la edad de una persona indique si es MAYOR o MENOR de edad.
$edad = readline("Ingrese su edad: ");

if (is_numeric($edad)) {
    $edad = intval($edad);
    if ($edad == 0) {
        echo "Por favor ingresar un numero valido";
    } else if ($edad >= 18) {
        echo "Usted es mayor de edad";
    } else {
        echo "Usted es menor de edad";
    }
} else {
    echo "Por favor ingresar un numero valido";
}

?>