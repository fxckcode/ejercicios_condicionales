# Escribir un algoritmo que, ingresada una calificación del 1 al 10, muestre por pantalla el
# siguiente mensaje. Cuando la calificación sea de 7 o superior mostrar “APROBADO” y si no
# obtuvo esa calificación mostrar “REPROBADO”.

calificacion = int(input("Ingrese la calificacion: "))

if calificacion >= 7:
    print("APROBADO");
else:
    print("REPROBADO");