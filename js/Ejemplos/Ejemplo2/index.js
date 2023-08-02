// Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
// a. Determinar su promedio
// b. Indicar si el estudiante aprobó o no el curso.
// Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.
var cal1 = parseFloat(prompt("Introduce la primera calificación: "));
var cal2 = parseFloat(prompt("Introduce la segunda calificación: "));
var cal3 = parseFloat(prompt("Introduce la tercera calificación: "));


var promedio = (cal1 + cal2 + cal3) / 3;
if (isNaN(cal1) || isNaN(cal2) || isNaN(cal3)) {
    alert("Por favor ingresar un numero valido")
} else if (promedio >= 70 && promedio <= 100 ){
    alert(`Aprobado, con un promedio de ${promedio.toFixed(1)}`);
} else if (promedio < 70) {
    alert(`Reprobado, con un promedio de ${promedio.toFixed(1)}`);
}

