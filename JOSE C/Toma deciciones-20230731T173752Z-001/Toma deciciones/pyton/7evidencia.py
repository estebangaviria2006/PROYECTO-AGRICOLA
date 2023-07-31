sueldo_inicial = int(input("Ingrese el sueldo inicial del trabajador: "))

if sueldo_inicial <= 500000:
    descuento = sueldo_inicial * 0.12
elif sueldo_inicial <= 1000000:
    descuento = sueldo_inicial * 0.15
else:
    descuento = sueldo_inicial * 0.18

sueldo_total = sueldo_inicial - descuento

print("Descuento: ", descuento)
print("Sueldo total: ", sueldo_total)
