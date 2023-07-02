// Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
// con el mensaje “Es el número mayor”.

var numero1 = prompt("Ingrese el primer numero:")
var numero2 = prompt("Ingrese el segundo numero: ")


if (numero1 > numero2) {
    alert(`${numero1}, El primero numero es el mayor`)
} else {
    alert(`${numero2}, El segundo numero es el mayor`)
}