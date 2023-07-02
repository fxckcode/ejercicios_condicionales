<?php
// Leer 3 número distintos y determinar cuál es el menor.
$numero1 = intval(readline("Ingrese el primer numero: "));
$numero2 = intval(readline("Ingrese el segundo numero: "));
$numero3 = intval(readline("Ingrese el tercer numero: "));

if ($numero1 < $numero2 && $numero1 < $numero3) {
    echo $numero1." El primer numero es el menor";
} else if ($numero2 < $numero1 && $numero2 < $numero3) {
    echo $numero2." El segundo numero es el menor";
} else {
    echo $numero3." El tercer numero es el menor";
}
