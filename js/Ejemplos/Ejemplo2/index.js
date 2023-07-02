// Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
// a. Determinar su promedio
// b. Indicar si el estudiante aprobó o no el curso.
// Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.
var cal1 = parseInt(prompt("Introduce la primera calificación: "));
var cal2 = parseInt(prompt("Introduce la segunda calificación: "));
var cal3 = parseInt(prompt("Introduce la tercera calificación: "));


var promedio = (cal1 + cal2 + cal3) / 3;
console.log(promedio);
if (promedio >= 70 ){
    alert("Aprobado");
} else {
    alert("Reprobado");
}

