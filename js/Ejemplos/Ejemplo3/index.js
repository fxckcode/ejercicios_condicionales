// Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.

var a = parseFloat(prompt("Introduce el numero A: "));
var b = parseFloat(prompt("Introduce el numero B: "));

if (isNaN(a) || isNaN(b)) {
    alert("Por favor ingresar un numero valido")
} else {
    if (a > b) {
        alert(`El numero A es mayor que el numero B`);
    } else if (a < b) {
        alert(`El numero A es menor que el numero B`);
    } else if (a == b) {
        alert("El numero A es igual que el numero B");
    }
}
