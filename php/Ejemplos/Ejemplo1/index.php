<?php 
// Diseñar un algoritmo que dada la edad de una persona indique si es MAYOR o MENOR de edad.
$edad = intval(readline("Ingrese su edad: "));

if ($edad >= 18) {
    echo "Usted es mayor de edad";
} else {
    echo "Usted es menor de edad";
}