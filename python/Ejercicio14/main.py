# Se tienen un cultivo de café, de los cuales con el uso de la tecnología se recolectan los
# siguientes datos para análisis de suelo:
# PH (Acidez del suelo) rango adecuado entre 5 y 5.5.
# Materia orgánica mayor a 8
# Fosforo (P) mayor a 30
# Calcio (Ca) mayor a 3
# Magnesio (Mg) mayor a 0.9
# Potasio (K) mayor a 0.4
# Aluminio (Al) menor a 1
# Acorde a los datos recolectados identificar si el suelo es apto para la siembra café


ph = input("Fosforo: ")
materia_organica = input("Materia Organica: ")
fosforo = input("Fosforo: ")
calcio = input("Calcio: ")
magnesio = input("Magnesio: ")
potasio = input("Potasio: ")
aluminio = input("Aluminio: ")

if ph.replace('.', '', 1).isdigit() and materia_organica.replace('.', '', 1).isdigit() and fosforo.replace('.', '', 1).isdigit() and calcio.replace('.', '', 1).isdigit() and magnesio.replace('.', '', 1).isdigit() and potasio.replace('.', '', 1).isdigit() and aluminio.replace('.', '', 1).isdigit():
    ph = float(ph)
    materia_organica = float(materia_organica)
    fosforo = float(fosforo);
    calcio = float(calcio);
    magnesio = float(magnesio);
    potasio = float(potasio);
    aluminio = float(aluminio);
    if ph >= 5 and ph <= 5.5 and materia_organica > 8 and fosforo > 30 and calcio > 3 and magnesio > 0.9 and potasio > 0.4 and aluminio < 1:
        print("El suelo es apto")
    else:
        print("El suelo no es apto")
else:
    print("Error en los datos")