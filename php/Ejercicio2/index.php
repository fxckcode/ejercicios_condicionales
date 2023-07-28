<?php
// Leer 3 número distintos y determinar cuál es el menor.
$numero1 = intval(readline("Ingrese el primer numero: "));
$numero2 = intval(readline("Ingrese el segundo numero: "));
$numero3 = intval(readline("Ingrese el tercer numero: "));

if ($numero1 < $numero2 && $numero1 < $numero3) {
    echo $numero1." El primer numero es el menor";
} else if ($numero2 < $numero1 && $numero2 < $numero3) {
    echo $numero2." El segundo numero es el menor";
} else if ($numero3 < $numero1 && $numero3 < $numero2) {
    echo $numero3." El tercer numero es el menor";
} else if ($numero1 == $numero2 && $numero1 < $numero3) {
    echo "El primer y segundo numero son iguales y son los menores";
} else if ($numero2 == $numero3 && $numero2 < $numero1) {
    echo "El segundo y tercer numero son iguales y son los menores";
} else if ($numero3 == $numero1 && $numero3 < $numero2) {
    echo "El primero y el tercer numero son iguales y son los menores";
} else if ($numero1 == $numero2 && $numero1 == $numero3) {
    echo "Los tres numeros son iguales";
}
