<form action="#" method="POST">
    <input type="number" step="any" placeholder="Numero 1" name="num1" required>
    <input type="number" step="any" placeholder="Numero 2" name="num2" required>
    <button type="submit">Calcular</button>
</form>


<?php
// Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
// con el mensaje “Es el número mayor”.

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    
    if (is_numeric($numero1) && is_numeric($numero2)) {
        $numero1 = floatval($numero1);
        $numero2 = floatval($numero2);
        if ($numero1 > $numero2) {
            echo $numero1." El primer numero es el mayor";
        } else if ($numero1 < $numero2){
            echo $numero2." El segundo numero es le mayor";
        } else if ($numero1 == $numero2) {
            echo "Ambos numeros son iguales";
        }
    } else {
        echo "Por favor ingresar un numero valido";
    }
}