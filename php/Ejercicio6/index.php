<form action="#" method="POST">
    <input type="number" name="horas" placeholder="Cantidad de horas" step="any" required>
    <button type="submit">Calcular</button>
</form>

<?php
// Hacer un algoritmo para ayudar a un trabajador a saber cuál será su sueldo semanal, se sabe
// que, si trabaja 40 horas o menos, se le pagará $20 por hora, pero si trabaja más de 40 horas
// entonces las horas extras se le pagarán a $25 por hora.

if (isset($_POST['horas'])) {
    $cantHoras = $_POST['horas'];
    $total = 0;
    $normales;
    $extras;
    
    if (is_numeric($cantHoras)) {
        $cantHoras = floatval($cantHoras);
        if ($cantHoras <= 40) {
            $total = $cantHoras * 20;
        } else if ($cantHoras > 40) {
            $normales = 40 * 20;
            $extras = ($cantHoras - 40) * 25;
            $total = $extras + $normales;
        }
        
        echo "Valor a pagar: ".$total;
    } else {
        echo "Error en los datos";
    }
}




