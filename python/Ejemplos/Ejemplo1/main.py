# Diseñar un algoritmo que dada la edad de una persona indique si es MAYOR o MENOR de edad.

edad = input("Ingrese su edad: ")
if edad.isdigit():
    edad = int(edad)
    if edad == 0:
        print("Por favor ingresar un numero valido")
    elif edad >= 18:
        print("Usted es mayor de edad")
    else:
        print("Usted es menor de edad")
else:
    print("Por favor ingresar un numero valido")



