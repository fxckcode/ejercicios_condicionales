# Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
# con el mensaje “Es el número mayor”.

numero1 = int(input("Ingrese el primer numero: "))
numero2 = int(input("Ingrese el segundo numero: "))

if numero1 > numero2:
    print(f"{numero1}, El primer número es el mayor")
else:
    print(f"{numero2}, El segundo es el numero mayor")