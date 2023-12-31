<form action="#" method="POST">
    <input type="number" step="any" name="sueldo" placeholder="Sueldo" required>
    <button type="submit">Calcular</button>
</form>

<?php
// A un trabajador le descuentan de su sueldo el 12% si su sueldo es menor o igual a 500000, por
// encima de 500000 y hasta 1000000 el 15%, y por encima de 1000000 el 18%. Realice un
// algoritmo que calcule el descuento y sueldo total que recibe el trabajador dado su sueldo
// inicial.

if (isset($_POST['sueldo'])) {
    $sueldo = $_POST['sueldo'];
    $descuento = 0;
    $total = 0;
    
    if (is_numeric($sueldo)) {
        $sueldo = floatval($sueldo);
        if ($sueldo <= 500000) {
            $descuento = 0.12;
        } elseif ($sueldo > 500000 && $sueldo <= 1000000) {
            $descuento = 0.15;
        } elseif ($sueldo > 1000000) {
            $descuento = 0.18;
        }
        
        $total = $sueldo - ($sueldo * $descuento);
        echo "El total con descuento es: ".$total;
    } else {
        echo "Error en los datos";
    }
}

