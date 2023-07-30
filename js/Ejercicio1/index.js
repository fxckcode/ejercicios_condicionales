// Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
// con el mensaje “Es el número mayor”.

var numero1 = parseFloat(prompt("Ingrese el primer numero:"))
var numero2 = parseFloat(prompt("Ingrese el segundo numero: "))


if (isNaN(numero1) || isNaN(numero2)) {
    alert("Por favor ingresar un numero valido")
} else {
    if (numero1 > numero2) {
        alert(`${numero1}, El primero numero es el mayor`)
    } else if (numero1 < numero2){
        alert(`${numero2}, El segundo numero es el mayor`)
    } else if (numero1 == numero2) {
        alert('Ambos numeros son iguales')
    }
}


