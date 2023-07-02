// Leer 3 número distintos y determinar cuál es el menor.
var numero1 = parseInt(prompt("Ingrese el primer numero: "));
var numero2 = parseInt(prompt("Ingrese el segundo numero: "));
var numero3 = parseInt(prompt("Ingrese el tercer numero: "));

if (numero1 < numero2 && numero1 < numero3) {
    alert(`${numero1}, El primer numero es el menor`)
} else if(numero2 < numero1 && numero2 < numero3) {
    alert(`${numero2}, El segundo numero es el menor`)
} else {
    alert(`${numero3}, El tercer numero es el menor`)
}