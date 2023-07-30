// Hacer un algoritmo para ayudar a un trabajador a saber cuál será su sueldo semanal, se sabe
// que, si trabaja 40 horas o menos, se le pagará $20 por hora, pero si trabaja más de 40 horas
// entonces las horas extras se le pagarán a $25 por hora.

var cantHoras = parseFloat(prompt("Cantidad de horas semanales: "))
var total = 0
var normales, extras;

if (isNaN(cantHoras)) {
    alert("Error en los datos")
} else {
    if (cantHoras <= 40){ 
        total = cantHoras * 20
    } else if (cantHoras > 40) {
        normales = 40 * 20
        extras = (cantHoras - 40) * 25
        total = normales + extras
    }
    
    alert(`Valor a pagar: ${total.toFixed(1)}`)
}


