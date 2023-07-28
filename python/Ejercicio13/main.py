# Realizar un programa que capture los datos de un empleado:
# Nombre, Genero (1-masculino, 2-femenino), Salario básico, y tiempo de servicio.
# El sistema debe calcular el valor de la bonificación anual en base a los siguientes
# lineamientos de la empresa:
# Si es mujer y el tiempo de servicio es superior a 5 años, su bonificación será de un 20% del
# Salario básico
# Si es mujer y el tiempo de servicio es inferior o igual a 5 años, su bonificación será de un
# 15% del Salario básico
# Si es hombre y el tiempo de servicio es superior a 6 años, su bonificación será de un 20% del
# Salario Básico.
# Si es hombre y el tiempo de servicio está entre 1 y 6 años su bonificación será de un 15%
# del Salario Básico.

nombre = input("Cual es su nombre: ")
genero = int(input("Genero (1-masculino, 2-femenino): "))
salario = float(input("Salario: "))
tiempo_servicio = int(input("Tiempo de servicio: "))


if genero == 2 and tiempo_servicio > 5:
    print(f"Bonificacion 20%: { round(salario * 0.20, 2)}, Total { round(salario + (salario * 0.20), 2)} ")
elif genero == 2 and tiempo_servicio <= 5:
    print(f"Bonificacion 15%: { round(salario * 0.15, 2)}, Total { round(salario + (salario * 0.15), 2)} ")
elif genero == 1 and tiempo_servicio > 6:
    print(f"Bonificacion 20%: { round(salario * 0.20, 2)}, Total { round(salario + (salario * 0.20), 2)} ")
elif genero == 1 and tiempo_servicio > 1 and tiempo_servicio <= 6:
    print(f"Bonificacion 15%: { round(salario * 0.15, 2)}, Total { round(salario + (salario * 0.15), 2)} ")