# Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B.
a = input("Ingrese el numero A: ")
b = input("Ingrese el numero B: ")

if a.replace('.', '', 1).isdigit() and b.replace('.', '', 1).isdigit():
    a = float(a) 
    b = float(b)
    if a > b :
        print("El numero A es mayor al numero B");
    elif a < b:
        print("El numero A es menor al numero B");
    else:
        print("El numero A es igual que el numero B");
else:
    print("Por favor ingresar un numero valido")   



