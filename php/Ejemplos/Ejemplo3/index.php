<form action="#" method="POST">
    <input type="number" step="any" placeholder="Numero A" name="a" required>
    <input type="number" step="any" placeholder="Numero B" name="b" required>
    <button type="submit">Calcular</button>
</form>

<?php
// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.

if (isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    
    if (is_numeric($a) && is_numeric($b)) {
        $a = floatval($a);
        $b = floatval($b);
        if ($a > $b) {
            echo "El numero A es mayor al numero B";
        } else if ($a < $b) {
            echo "El numero A es menor al numero B";
        } else {
            echo "El numero A es igual al numero B";
        }
    } else {
        echo "Por favor ingresar un numero valido";
    }
}

