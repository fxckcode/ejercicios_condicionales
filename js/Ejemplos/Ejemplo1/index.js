// Diseñar un algoritmo que dada la edad de una persona indique si es MAYOR o MENOR de edad.
var edad = parseInt(prompt("¿Cuál es tu edad?"))

if (isNaN(edad) || edad == 0) {
    alert("Por favor ingresar un numero valido")
} else if (edad >= 18) {
    alert("Eres mayor de edad")
} else if (edad <= 17) {
    alert("Eres menor de edad")
} else {
    alert("Error en los datos")
}