<!-- Realizar un programa que capture los datos de un empleado:
Nombre, Genero (1-masculino, 2-femenino), Salario básico, y tiempo de servicio.
El sistema debe calcular el valor de la bonificación anual en base a los siguientes
lineamientos de la empresa:
Si es mujer y el tiempo de servicio es superior a 5 años, su bonificación será de un 20% del
Salario básico
Si es mujer y el tiempo de servicio es inferior o igual a 5 años, su bonificación será de un
15% del Salario básico
Si es hombre y el tiempo de servicio es superior a 6 años, su bonificación será de un 20% del
Salario Básico.
Si es hombre y el tiempo de servicio está entre 1 y 6 años su bonificación será de un 15%
del Salario Básico. -->

<form action="#" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <select name="genero" id="genero">
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
    </select>
    <input type="number" name="salario" placeholder="Salario" step="any" required>
    <input type="number" name="tiempo_servicio" placeholder="Tiempo de servicio" step="any" required>
    <button type="submit">Calcular</button>
</form>

<?php 

if (isset($_POST['nombre']) && isset($_POST['genero']) && isset($_POST['salario']) && isset($_POST['tiempo_servicio'])) {
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $salario = $_POST['salario'];
    $tiempo_servicio = $_POST['tiempo_servicio'];
    if (is_numeric($genero) && is_numeric($salario) && is_numeric($tiempo_servicio)) {
        $genero = intval($genero);
        $salario = floatval($salario);
        $tiempo_servicio = intval($tiempo_servicio);
        if ($genero == 2 && $tiempo_servicio > 5) {
            echo $nombre.", su bonificacion es del 20%: ".($salario * 0.20)." y el total es: ".($salario + ($salario * 0.20));
        } else if ($genero == 2 && $tiempo_servicio <= 5) {
            echo $nombre.", su bonificacion es del 15%: ".($salario * 0.15)." y el total es: ".($salario + ($salario * 0.15));
        } else if ($genero == 1 && $tiempo_servicio > 6) {
            echo $nombre.", su bonificacion es del 20%: ".($salario * 0.20)." y el total es: ".($salario + ($salario * 0.20));
        } else if ($genero == 1 && $tiempo_servicio > 1 && $tiempo_servicio <= 6) {
            echo $nombre.", su bonificacion es del 15%: ".($salario * 0.15)." y el total es: ".($salario + ($salario * 0.15));
        } else {
            echo "Error en los datos";
        }
    } else {
        echo "Error en los datos";
    }
}




