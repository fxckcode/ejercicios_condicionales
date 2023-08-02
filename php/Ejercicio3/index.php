<form action="#" method="POST">
    <input type="number" name="calificacion" id="calificacion" step="any" placeholder="Calificacion" required>
    <button type="submit">Calcular</button>
</form>

<?php
// Escribir un algoritmo que, ingresada una calificación del 1 al 10, muestre por pantalla el
// siguiente mensaje. Cuando la calificación sea de 7 o superior mostrar “APROBADO” y si no
// obtuvo esa calificación mostrar “REPROBADO”.

if (isset($_POST['calificacion'])) {
    $calificacion = floatval($_POST['calificacion']);
    
    if ($calificacion >= 7 && $calificacion <= 10) {
        echo "APROBADO";
    } else if ($calificacion < 7 && $calificacion > 0) {
        echo "REPROBADO";
    } else {
        echo "Error en los datos";
    }
}