dia = int(input("Ingresa la cantidad de dias: "))
hora = int(input("Ingresa la cantidad de horas: "))
min = int(input("Ingresa la cantidad de minutos: "))
seg = str((min+((hora+(dia*24))*60))*60)

print (f"sus datos equivalen a {seg}")