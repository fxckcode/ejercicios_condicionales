// Realizar un login de usuario, solicitando el correo y la contraseña, 
// si el correo=’fund@gmail.com’ y la clave=’123456‘, el sistema mostrará el mensaje 
// “Bienvenidos a Fundamentos de programación”, si los datos son inválidos el sistema deberá 
// mostrar “Error en los datos de ingreso.” 

function iniciarSesion() {
    var email = document.querySelector("#email").value;
    var password = document.querySelector("#password").value;

    if (email == 'fund@gmail.com' && password == '123456') {
        alert("Bienvenidos a Fundamentos de programación")
    } else {
        alert("Error en los datos de ingreso")
    }
}