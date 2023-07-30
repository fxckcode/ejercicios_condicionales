<?php

// Los empleados de una fábrica trabajan en dos turnos: diurno y nocturno. Se desea calcular el
// jornal diario de acuerdo con los siguientes puntos:
// La tarifa de las horas diurnas es de 10 dólares.
// La tarifa de las horas nocturnas es de 15 dólares.
// Codifique un algoritmo que solicite el turno de trabajo y el número de horas trabajadas y
// posteriormente calcule el valor a pagar.
$turno = readline("Cual es su turno (diurno o nocturno): ");
$cantHoras = readline("Cual es su cantidad de horas: ");
$total = 0;

if (is_numeric($cantHoras)) {
    $cantHoras = floatval($cantHoras);
    if (strtolower($turno) == 'diurno') {
        $total = $cantHoras * 10;
        echo "Cantidad a pagar ".$total;
    } elseif (strtolower($turno) == 'nocturno') {
        $total = $cantHoras * 15;
        echo "Cantidad a pagar ".$total;
    } else {
        echo "Error en los datos";
    }
} else {
    echo "Error en los datos";
}

