<!-- Realizar un login de usuario, solicitando el correo y la contraseña, 
si el correo=’fund@gmail.com’ y la clave=’123456‘, el sistema mostrará el mensaje 
“Bienvenidos a Fundamentos de programación”, si los datos son inválidos el sistema deberá 
mostrar “Error en los datos de ingreso.”  -->

<form action="#" method="POST">
    <input type="email" required name="email" placeholder="Correo">
    <input type="password" required name="password" placeholder="Password">
    <button type="submit">Iniciar Sesión</button>
</form>

<?php 

if (isset($_POST['email']) && isset($_POST['password'])) {
    $correo = $_POST['email'];
    $clave = $_POST['password'];
    
    if ($correo == 'fund@gmail.com' && $clave == '123456') {
        echo "Bienvenidos a Fundamentos de programación";
    } else  {
        echo "Error en los datos de ingreso";
    }
}