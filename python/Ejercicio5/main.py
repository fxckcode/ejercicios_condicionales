# Los empleados de una fábrica trabajan en dos turnos: diurno y nocturno. Se desea calcular el
# jornal diario de acuerdo con los siguientes puntos:
# La tarifa de las horas diurnas es de 10 dólares.
# La tarifa de las horas nocturnas es de 15 dólares.
# Codifique un algoritmo que solicite el turno de trabajo y el número de horas trabajadas y
# posteriormente calcule el valor a pagar.

turno = input("Cual es su turno (diurno o nocturno): ")
cantHoras = int(input("Cual es la cantidad de horas: "))
total = 0
if turno.lower() == 'diurno':
    total = cantHoras * 10
    print(f"Cantidad a pagar: {total}")
elif turno.lower() == 'nocturno':
    total = cantHoras * 15
    print(f"Cantidad a pagar: {total}")
else:
    print("Error en los datos")
