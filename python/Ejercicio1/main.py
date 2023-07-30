# Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
# con el mensaje “Es el número mayor”.

numero1 = input("Ingrese el primer numero: ")
numero2 = input("Ingrese el segundo numero: ")

if numero1.replace('.', '', 1).isdigit() and numero2.replace('.', '', 1).isdigit():
    numero1 = float(numero1)
    numero2 = float(numero2)

    if numero1 > numero2:
        print(f"{numero1}, El primer número es el mayor")
    elif (numero1 < numero2):
        print(f"{numero2}, El segundo es el numero mayor")
    elif (numero1 == numero2):
        print("Ambos numeros son iguales")
else:
    print("Por favor ingrese un numero valido")