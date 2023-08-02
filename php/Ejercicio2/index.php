<form action="#" method="POST">
    <input type="number" step="any" placeholder="Primer numero" name="num1" required>
    <input type="number" step="any" placeholder="Segundo numero" name="num2" required>
    <input type="number" step="any" placeholder="Tercer numero" name="num3" required>
    <button type="submit">Determinar</button>
</form>


<?php
// Leer 3 número distintos y determinar cuál es el menor.

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $numero3 = $_POST['num3'];
    
    if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3)) {
        $numero1 = floatval($numero1);
        $numero2 = floatval($numero2);
        $numero3 = floatval($numero3);
        if ($numero1 < $numero2 && $numero1 < $numero3) {
            echo $numero1." El primer numero es el menor";
        } else if ($numero2 < $numero1 && $numero2 < $numero3) {
            echo $numero2." El segundo numero es el menor";
        } else if ($numero3 < $numero1 && $numero3 < $numero2) {
            echo $numero3." El tercer numero es el menor";
        } else if ($numero1 == $numero2 && $numero1 < $numero3) {
            echo "El primer y segundo numero son iguales y son los menores";
        } else if ($numero2 == $numero3 && $numero2 < $numero1) {
            echo "El segundo y tercer numero son iguales y son los menores";
        } else if ($numero3 == $numero1 && $numero3 < $numero2) {
            echo "El primero y el tercer numero son iguales y son los menores";
        } else if ($numero1 == $numero2 && $numero1 == $numero3) {
            echo "Los tres numeros son iguales";
        }
    } else {
        echo "Por favor ingrese un numero valido";
    }
}


