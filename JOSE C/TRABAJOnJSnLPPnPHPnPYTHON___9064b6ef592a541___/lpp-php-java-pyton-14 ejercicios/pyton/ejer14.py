ph = input("Ingrese el PH de su suelo:")
materia = float(input("Ingrese la materia organica de su suelo: "))
fosforo = float(input("Ingrese el fosforo de su suelo: "))
calcio = float(input("Ingrese el calcio de su suelo: "))
magnesio = float(input("Ingrese el magnesio de su suelo: "))
potasio = float(input("Ingrese el potasio de su suelo: "))
aluminio = float(input("Ingrese el aluminio de su suelo: "))
ph = 5
if(ph > 5 and ph < 5.5 and materia > 8 and fosforo > 30 and calcio > 3 and magnesio > 0.9 and potasio > 0.4 and aluminio < 1):{
    print("Suelo Aprobado")}
else:{
    print("Suelo no Aprobado")}