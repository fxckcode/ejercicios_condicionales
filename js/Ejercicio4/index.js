// En un estacionamiento cobran $1.500 por hora. Diseñe un algoritmo que determine cuanto
// debe pagar un cliente por el estacionamiento de su vehículo, conociendo el tiempo de
// estacionamiento en horas.

var cantHoras = parseFloat(prompt("Cantidad de horas en el estacionamiento: "))

if (isNaN(cantHoras)) {
    alert("Por favor digite un numero valido")
} else {
    var total = cantHoras * 1500
    alert(`Total a pagar: ${total}`)
}