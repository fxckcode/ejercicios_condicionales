<?php
// En un estacionamiento cobran $1.500 por hora. Diseñe un algoritmo que determine cuanto
// debe pagar un cliente por el estacionamiento de su vehículo, conociendo el tiempo de
// estacionamiento en horas.
$cantHoras = readline("Cantidad de horas: ");

if (is_numeric($cantHoras)) {
    $total = $cantHoras * 1500;
    echo "El total a pagar es: ".$total;
} else {
    echo "Por favor digite un numero valido";
}