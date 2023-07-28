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
<?php 

$nombre = readline("Cual es su nombre: ");
$genero = intval(readline("Genero (1-masculino, 2-femenino): "));
$salario = floatval(readline("Salario: "));
$tiempo_servicio = intval(readline("Tiempo de servicio: "));

if ($genero == 2 && $tiempo_servicio > 5) {
    echo "Bonificacion 20%: ".($salario * 0.20).", Total ".($salario + ($salario * 0.20));
} else if ($genero == 2 && $tiempo_servicio <= 5) {
    echo "Bonificacion 15%: ".($salario * 0.15).", Total ".($salario + ($salario * 0.15));
} else if ($genero == 1 && $tiempo_servicio > 6) {
    echo "Bonificacion 20%: ".($salario * 0.20).", Total".($salario + ($salario * 0.20));
} else if ($genero == 1 && $tiempo_servicio > 1 && $tiempo_servicio <= 6) {
    echo "Bonificacion 15%: ".($salario * 0.15).", Total ".($salario + ($salario * 0.15));
}

