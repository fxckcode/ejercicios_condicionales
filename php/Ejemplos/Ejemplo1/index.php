<form action="#" method="POST">
    <input type="number" name="edad" id="edad" placeholder="edad" required>
    <button type="submit">Calcular</button>
</form>

<?php 
// Diseñar un algoritmo que dada la edad de una persona indique si es MAYOR o MENOR de edad.

if (isset($_POST['edad'])) {
    $edad = intval($_POST['edad']);
    
    if (is_numeric($edad)) {
        $edad = intval($edad);
        if ($edad == 0) {
            echo "Por favor ingresar un numero valido";
        } else if ($edad >= 18 && $edad <= 100) {
            echo "Usted es mayor de edad";
        } else {
            echo "Usted es menor de edad";
        }
    } else {
        echo "Por favor ingresar un numero valido";
    }
}
?>