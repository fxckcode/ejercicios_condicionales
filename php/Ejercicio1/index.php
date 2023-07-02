<?php
// Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
// con el mensaje “Es el número mayor”.

$numero1 = readline("Ingrese el primer numero: ");
$numero2 = readline("Ingrese el segundo numero: ");

if ($numero1 > $numero2) {
    echo $numero1." El primer numero es el mayor";
} else {
    echo $numero2." El segundo numero es le mayor";
}