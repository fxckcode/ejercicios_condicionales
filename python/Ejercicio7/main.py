# A un trabajador le descuentan de su sueldo el 12% si su sueldo es menor o igual a 500000, por
# encima de 500000 y hasta 1000000 el 15%, y por encima de 1000000 el 18%. Realice un
# algoritmo que calcule el descuento y sueldo total que recibe el trabajador dado su sueldo
# inicial.


sueldo = input("Cual es su sueldo: ")
descuento = 0
total = 0

if sueldo.replace('.', '', 1).isdigit():
    sueldo = float(sueldo)

    if sueldo <= 500000:
        descuento = 0.12
    elif sueldo > 500000 and sueldo <= 1000000:
        descuento = 0.15
    elif sueldo > 1000000:
        descuento = 0.18

    total = sueldo - (sueldo * descuento)
    print(f"El total con el descuento aplicado es: {round(total, 1)}") 
else:
    print("Error en los datos")
