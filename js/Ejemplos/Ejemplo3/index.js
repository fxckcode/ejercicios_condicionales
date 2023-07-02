// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.

var a = parseInt(prompt("Introduce el numero A: "));
var b = parseInt(prompt("Introduce el numero B: "));

if (a > b) {
    alert(`El numero mayor es ${a}`);
} else if (a < b) {
    alert(`El numero mayor es ${b}`);
} else {
    alert("Los numeros son iguales");
}