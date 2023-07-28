<?php
// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.
$a = intval(readline("Ingrese el numero A: "));
$b = intval(readline("Ingrese el numero B: "));

if ($a > $b) {
    echo "El numero A es mayor al numero B";
} else if ($a < $b) {
    echo "El numero A es menor al numero B";
} else {
    echo "Los numeros son iguales";
}