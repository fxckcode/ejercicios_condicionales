<form action="#" method="POST">
    <input type="number" step="any" name="cal1" placeholder="Calificación 1" required>
    <input type="number" step="any" name="cal2" placeholder="Calificación 2" required>
    <input type="number" step="any" name="cal3" placeholder="Calificación 3" required>
    <button type="submit">Calcular</button>
</form>

<?php

// Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
// a. Determinar su promedio
// b. Indicar si el estudiante aprobó o no el curso.
// Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.

if (isset($_POST['cal1']) && isset($_POST['cal2']) && isset($_POST['cal3'])) {
    $cal1 = $_POST['cal1'];
    $cal2 = $_POST['cal2'];
    $cal3 = $_POST['cal3'];
    
    if (is_numeric($cal1) && is_numeric($cal2) && is_numeric($cal3)) {
        $cal1 = floatval($cal1);
        $cal2 = floatval($cal2);
        $cal3 = floatval($cal3);
        $promedio = ($cal1 + $cal2 + $cal3) / 3;
        if ($promedio >= 70 && $promedio <= 100) {
            echo "Aprobado, con un promedio de ".round($promedio, 1);
        } else {
            echo "Reprobado, con un promedio de ".round($promedio, 1);
        }
    
    } else {
        echo "Por favor ingresar un numero valido";
    }
}



