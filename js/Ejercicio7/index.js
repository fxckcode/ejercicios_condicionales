// A un trabajador le descuentan de su sueldo el 12% si su sueldo es menor o igual a 500000, por
// encima de 500000 y hasta 1000000 el 15%, y por encima de 1000000 el 18%. Realice un
// algoritmo que calcule el descuento y sueldo total que recibe el trabajador dado su sueldo
// inicial.

var sueldo = parseInt(prompt("Cual es su sueldo"))
var descuento = 0;
var total = 0;

if (sueldo <= 500000) {
    descuento = 0.12
} else if(sueldo > 500000 && sueldo < 1000000) {
    descuento = 0.15
} else if(sueldo > 1000000) {
    descuento = 0.18
}

total  = sueldo - (sueldo * descuento)
alert(`El total con el descuento aplicado es: ${total}`)