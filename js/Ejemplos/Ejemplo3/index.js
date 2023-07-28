// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.

var a = parseInt(prompt("Introduce el numero A: "));
var b = parseInt(prompt("Introduce el numero B: "));

if (a > b) {
    alert(`El numero A es mayor que el numero B`);
} else if (a < b) {
    alert(`El numero A es menor que el numero B`);
} else {
    alert("Los dos numeros son iguales");
}