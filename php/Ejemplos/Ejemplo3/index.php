<?php
// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.
$a = readline("Ingrese el numero A: ");
$b = readline("Ingrese el numero B: ");

if (is_numeric($a) && is_numeric($b)) {
    $a = floatval($a);
    $b = floatval($b);
    if ($a > $b) {
        echo "El numero A es mayor al numero B";
    } else if ($a < $b) {
        echo "El numero A es menor al numero B";
    } else {
        echo "El numero A es igual al numero B";
    }
} else {
    echo "Por favor ingresar un numero valido";
}

