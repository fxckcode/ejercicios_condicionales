<?php
// Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
// a. Determinar su promedio
// b. Indicar si el estudiante aprobó o no el curso.
// Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.
$cal1 = readline("Ingrese la primera calificacion: ");
$cal2 = readline("Ingrese la segunda calificacion: ");
$cal3 = readline("Ingrese la tercera calificacion: ");

if (is_numeric($cal1) && is_numeric($cal2) && is_numeric($cal3)) {
    $cal1 = floatval($cal1);
    $cal2 = floatval($cal2);
    $cal3 = floatval($cal3);
    $promedio = ($cal1 + $cal2 + $cal3) / 3;
    if ($promedio >= 70) {
        echo "Aprobado, con un promedio de ".round($promedio, 1);
    } else {
        echo "Reprobado, con un promedio de ".round($promedio, 1);
    }

} else {
    echo "Por favor ingresar un numero valido";
}



