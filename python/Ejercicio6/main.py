# Hacer un algoritmo para ayudar a un trabajador a saber cuál será su sueldo semanal, se sabe
# que, si trabaja 40 horas o menos, se le pagará $20 por hora, pero si trabaja más de 40 horas
# entonces las horas extras se le pagarán a $25 por hora.
cantHoras = int(input("Cantidad de horas: "))
total = 0
if cantHoras <= 40:
    total = cantHoras * 20
elif cantHoras > 40:
    total = cantHoras * 25

print(f"Total a pagar: {total}")