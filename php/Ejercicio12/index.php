<!-- Realizar un login de usuario, solicitando el correo y la contraseña, 
si el correo=’fund@gmail.com’ y la clave=’123456‘, el sistema mostrará el mensaje 
“Bienvenidos a Fundamentos de programación”, si los datos son inválidos el sistema deberá 
mostrar “Error en los datos de ingreso.”  -->

<?php 

$correo = strval(readline('Correo: '));
$clave = strval(readline("Contraseña: "));


if ($correo == 'fund@gmail.com' && $clave == '123456') {
    echo "Bienvenidos a Fundamentos de programación";
} else  {
    echo "Error en los datos de ingreso";
}