<?php
// Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
// a. Determinar su promedio
// b. Indicar si el estudiante aprobó o no el curso.
// Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.
$cal1 = intval(readline("Ingrese la primera calificacion: "));
$cal2 = intval(readline("Ingrese la segunda calificacion: "));
$cal3 = intval(readline("Ingrese la tercera calificacion: "));


$promedio = ($cal1 + $cal2 + $cal3) / 3;

if ($promedio >= 70) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}