// Se tienen un cultivo de café, de los cuales con el uso de la tecnología se recolectan los
// siguientes datos para análisis de suelo:
// PH (Acidez del suelo) rango adecuado entre 5 y 5.5.
// Materia orgánica mayor a 8
// Fosforo (P) mayor a 30
// Calcio (Ca) mayor a 3
// Magnesio (Mg) mayor a 0.9
// Potasio (K) mayor a 0.4
// Aluminio (Al) menor a 1
// Acorde a los datos recolectados identificar si el suelo es apto para la siembra café

var ph = parseFloat(prompt("PH: "))
var materia_organica = parseFloat(prompt("Materia orgánica"))
var fosforo = parseFloat(prompt("Fosforo: "))
var calcio = parseFloat(prompt("Calcio: "))
var magnesio = parseFloat(prompt("Magnesio: "))
var potasio = parseFloat(prompt("Potasio: "))
var aluminio = parseFloat(prompt("Aluminio: "))

if (ph >= 5 && ph <= 5.5 && materia_organica > 8 && fosforo > 30 && calcio > 3 && magnesio > 0.9 && potasio > 0.4 && aluminio < 1) {
    alert("El suelo es apto")
} else {
    alert("El suelo no es apto")
}
