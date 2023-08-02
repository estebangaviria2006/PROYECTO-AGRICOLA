altura = input("Ingrese su altura aproximada: ")
iniciales = input("Ingrese sus iniciales: ")

porciones = altura.split(".")
if altura and len(porciones) == 2 and porciones[0].isdigit() and porciones[1].isdigit():
    altura_metros = porciones[0]
    altura_centimetros = porciones[1]
    print(f"Sus iniciales son: {iniciales} y su altura es: {altura_metros} metro y {altura_centimetros} centímetros")
elif altura and float(altura) < 0:
    print("altura baja")
else:
    print("Información inválida")