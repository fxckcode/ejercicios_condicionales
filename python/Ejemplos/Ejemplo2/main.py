# Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
# a. Determinar su promedio
# b. Indicar si el estudiante aprobó o no el curso.
# Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos.

cal1 = input("Ingrese la primera calificación: ")
cal2 = input("Ingrese la segunda calificación: ")
cal3 = input("Ingrese la tercera calificación: ")


if cal1.replace('.', '', 1).isdigit() and cal2.replace('.', '', 1).isdigit() and cal3.replace('.', '', 1).isdigit():
    cal1 = float(cal1)
    cal2 = float(cal2)
    cal3 = float(cal3)
    promedio = (cal1 + cal2 + cal3) / 3
    if promedio >= 70:
        print(f"Aprobado, con un promedio de {round(promedio, 1)}")
    else:
        print(f"Reprobado, con un promedio de {round(promedio, 1)}")
else:
    print("Por favor ingresar un numero valido")



    