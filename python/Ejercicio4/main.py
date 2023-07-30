# En un estacionamiento cobran $1.500 por hora. Diseñe un algoritmo que determine cuanto
# debe pagar un cliente por el estacionamiento de su vehículo, conociendo el tiempo de
# estacionamiento en horas.
cantHoras = input("Cantidad de horas: ")

if cantHoras.replace('.', '', 1).isdigit():
    cantHoras = float(cantHoras)
    total = cantHoras * 1500
    print(f"El total a pagar es: {round(total, 2)}")
else:
    print('Por favor digite un numero valido')