<?php
// Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
// con el mensaje “Es el número mayor”.

$numero1 = readline("Ingrese el primer numero: ");
$numero2 = readline("Ingrese el segundo numero: ");

if (is_numeric($numero1) && is_numeric($numero2)) {
    $numero1 = floatval($numero1);
    $numero2 = floatval($numero2);
    if ($numero1 > $numero2) {
        echo $numero1." El primer numero es el mayor";
    } else if ($numero1 < $numero2){
        echo $numero2." El segundo numero es le mayor";
    } else if ($numero1 == $numero2) {
        echo "Ambos numeros son iguales";
    }
} else {
    echo "Por favor ingresar un numero valido";
}
