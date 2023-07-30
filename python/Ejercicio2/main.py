# Leer 3 número distintos y determinar cuál es el menor.
numero1 = input("Ingrese el primer numero: ")
numero2 = input("Ingrese el segundo numero: ")
numero3 = input("Ingrese el tercer numero: ")

if numero1.replace('.', '', 1).isdigit() and numero2.replace('.', '', 1).isdigit() and numero3.replace('.', '', 1).isdigit():
    numero1 = float(numero1)
    numero2 = float(numero2)
    numero3 = float(numero3)
    if numero1 < numero2 and numero1 < numero3:
        print(f"{numero1}, El primer número es el menor")
    elif numero2 < numero1 and numero2 < numero3:
        print(f"{numero2}, El segundo es el numero menor")
    elif numero3 < numero1 and numero3 < numero2:
        print(f"{numero3}, El tercer es el numero menor")
    elif numero1 == numero2 and numero1 < numero3:
        print("El primer y segundo numero son iguales y son los menores")
    elif numero2 == numero3 and numero2 < numero1:
        print("El segundo y tercer numero son iguales y son los menores")
    elif numero3 == numero1 and numero3 < numero2:
        print("El primero y el tercer numero son iguales y son los menores")
    elif numero1 == numero2 and numero1 == numero3:
        print("Los tres numeros son iguales")
else:
    print("Por favor ingrese un numero valido")
