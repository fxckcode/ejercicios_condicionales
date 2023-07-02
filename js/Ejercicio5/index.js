// Los empleados de una fábrica trabajan en dos turnos: diurno y nocturno. Se desea calcular el
// jornal diario de acuerdo con los siguientes puntos:
// La tarifa de las horas diurnas es de 10 dólares.
// La tarifa de las horas nocturnas es de 15 dólares.
// Codifique un algoritmo que solicite el turno de trabajo y el número de horas trabajadas y
// posteriormente calcule el valor a pagar.
var turno = prompt("Cual es su turno (diurno o nocturno): ")
var cantHoras = parseInt(prompt("Cantidad de horas trabajadas: "))
var total;
if (turno.toLowerCase() == "diurno") {
    total = cantHoras * 10
} else if (turno.toLowerCase() == "nocturno") {
    total = cantHoras * 15
}

alert(`Total a pagar ${total} dolares`)