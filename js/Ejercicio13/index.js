// Realizar un programa que capture los datos de un empleado:
// Nombre, Genero (1-masculino, 2-femenino), Salario básico, y tiempo de servicio.
// El sistema debe calcular el valor de la bonificación anual en base a los siguientes
// lineamientos de la empresa:
// Si es mujer y el tiempo de servicio es superior a 5 años, su bonificación será de un 20% del
// Salario básico
// Si es mujer y el tiempo de servicio es inferior o igual a 5 años, su bonificación será de un
// 15% del Salario básico
// Si es hombre y el tiempo de servicio es superior a 6 años, su bonificación será de un 20% del
// Salario Básico.
// Si es hombre y el tiempo de servicio está entre 1 y 6 años su bonificación será de un 15%
// del Salario Básico.

var nombre = prompt("Cuál es su nombre: ")
var genero = parseInt(prompt("Genero (1-masculino, 2-femenino): "))
var salario = parseFloat(prompt("Salario: "))
var tiempo_servicio = parseInt(prompt("Tiempo de servicio: "))


if (isNaN(genero) || isNaN(salario) || isNaN(tiempo_servicio)) {
    alert("Error en los datos")
} else {
    if (genero == 2 && tiempo_servicio > 5) {
        alert(`${nombre}, su bonificacion es del 20%: ${salario * 0.20} y el total es ${salario + (salario * 0.20)} `)
    } else if (genero == 2 && tiempo_servicio <= 5) {
        alert(`${nombre}, su bonificacion es del 15%: ${salario * 0.15} y el total es ${salario + (salario * 0.15)}`)
    } else if (genero == 1 && tiempo_servicio > 6) {
        alert(`${nombre}, su bonificacion es del 20%: ${salario * 0.20} y el total es ${salario + (salario * 0.20)} `)
    } else if (genero == 1 && tiempo_servicio > 1 && tiempo_servicio <= 6) {
        alert(`${nombre}, su bonificacion es del 15%: ${salario * 0.15} y el total es ${salario + (salario * 0.15)}`)
    }
}

