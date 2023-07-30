# Hacer un algoritmo para ayudar a un trabajador a saber cuál será su sueldo semanal, se sabe
# que, si trabaja 40 horas o menos, se le pagará $20 por hora, pero si trabaja más de 40 horas
# entonces las horas extras se le pagarán a $25 por hora.
cantHoras = input("Cantidad de horas: ")
total = 0
normales = 0
extras = 0

if cantHoras.replace('.', '', 1).isdigit():
    cantHoras = float(cantHoras)
    if cantHoras <= 40:
        total = cantHoras * 20
    elif cantHoras > 40:
        normales = 40 * 20
        extras = (cantHoras - 40) * 25
        total = normales + extras

    print(f"Total a pagar: {total}")
else:
    print("Error en los datos")
