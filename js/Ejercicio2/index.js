// Leer 3 números distintos y determinar cuál es el menor.
var numero1 = parseFloat(prompt("Ingrese el primer numero: "));
var numero2 = parseFloat(prompt("Ingrese el segundo numero: "));
var numero3 = parseFloat(prompt("Ingrese el tercer numero: "));

if (isNaN(numero1) || isNaN(numero2) || isNaN(numero3)) {
    alert("Por favor ingrese un numero valido")
} else {
    if (numero1 < numero2 && numero1 < numero3) {
        alert(`${numero1}, El primer numero es el menor`)
    } else if(numero2 < numero1 && numero2 < numero3) {
        alert(`${numero2}, El segundo numero es el menor`)
    } else if (numero3 < numero1 && numero3 < numero2) {
        alert(`${numero3}, El tercer numero es el menor`)
    } else if (numero1 == numero2 && numero1 < numero3) {
        alert(`El primer y segundo numero son iguales y son los menores`)
    } else if (numero2 == numero3 && numero2 < numero1) {
        alert(`El segundo y tercer numero son iguales y son los menores`)
    } else if (numero3 == numero1 && numero3 < numero2) {
        alert(`El primero y el tercer numero son iguales y son los menores`)
    } else if (numero3 == numero1 && numero3 == numero2) {
        alert("Los tres numeros son iguales")
    }
}
