# Leer 3 número distintos y determinar cuál es el menor.
numero1 = int(input("Ingrese el primer numero: "))
numero2 = int(input("Ingrese el segundo numero: "))
numero3 = int(input("Ingrese el tercer numero: "))

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