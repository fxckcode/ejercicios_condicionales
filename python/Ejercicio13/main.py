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
genero = input("Genero (1-masculino, 2-femenino): ")
salario = input("Salario: ")
tiempo_servicio = input("Tiempo de servicio: ")


if genero.isdigit() and salario.replace('.', '', 1).isdigit() and tiempo_servicio.isdigit():
    genero = int(genero)
    salario = float(salario)
    tiempo_servicio = int(tiempo_servicio)
    if genero == 2 and tiempo_servicio > 5:
        print(f"{nombre}, su bonificacion es de 20%: { round(salario * 0.20, 2)} y el Total es: { round(salario + (salario * 0.20), 2)} ")
    elif genero == 2 and tiempo_servicio <= 5:
        print(f"{nombre}, su bonificacion es de 15%: { round(salario * 0.15, 2)} y el Total es: { round(salario + (salario * 0.15), 2)} ")
    elif genero == 1 and tiempo_servicio > 6:
        print(f"{nombre}, su bonificacion es de 20%: { round(salario * 0.20, 2)} y el Total es: { round(salario + (salario * 0.20), 2)} ")
    elif genero == 1 and tiempo_servicio > 1 and tiempo_servicio <= 6:
        print(f"{nombre}, su bonificacion es de 15%: { round(salario * 0.15, 2)} y el Total es: { round(salario + (salario * 0.15), 2)} ")

else:
    print("Error en los datos")