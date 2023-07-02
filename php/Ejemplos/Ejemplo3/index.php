<?php
// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.
$a = intval(readline("Ingrese el numero A: "));
$b = intval(readline("Ingrese el numero B: "));

if ($a > $b) {
    echo "El numero mayor es:".$a;
} else if ($a < $b) {
    echo "El numero mayor es:".$b;
} else {
    echo "Los numeros son iguales";
}