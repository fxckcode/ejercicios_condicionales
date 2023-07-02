# Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
# a. Determinar su promedio
# b. Indicar si el estudiante aprobó o no el curso.
# Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.

cal1 = int(input("Ingrese la primera calificación: "))
cal2 = int(input("Ingrese la segunda calificación: "))
cal3 = int(input("Ingrese la tercera calificación: "))

promedio = (cal1 + cal2 + cal3) / 3

if promedio >= 70:
    print("Aprobado")
else:
    print("Reprobado")
    