fechaActual = '16/08/2023'
while True:
    ciudad = input("Ciudad: ")
    if ciudad.isalpha():
        break
    else:
        print("Ingresa texto... Inténtalo de nuevo.")

while True:
    nombreCliente = input("Ingrese su nombre: ")
    if nombreCliente.isalpha():
        break
    else:
        print("Ingresa solo texto e Inténtalo de nuevo.")

while True:
    nombreProducto = input("Ingrese nombre del producto: ")
    if nombreProducto.isalpha():
        break
    else:
        print("Ingresa solo texto, Inténtalo de nuevo.")

while True:
    try:
        valorProducto = float(input("Ingrese el precio: "))
        if valorProducto >= 0:
            break
        else:
            print("Ingresa un número positivo, Inténtalo de nuevo.")
    except ValueError:
        print("Ingresa un valor numérico válido.")

while True:
    try:
        cantidadProducto= int(input("Ingrese la cantidad de productos: "))
        if cantidadProducto >= 0:
            break
        else:
            print("Ingresa un número positivo, Inténtalo de nuevo.")
    except ValueError:
        print("Ingresa un valor numérico válido.")

valorTotal = valorProducto * cantidadProducto
descuento = valorTotal * 0.175  # Descuento de 17.5%
valorTotalDescuento = int(valorTotal - descuento)

mi_tabla = [
    ['Ciudad: ', ciudad ], 
    ['fecha: ', fechaActual ], 
    ['nombre del cliente: ', nombreCliente],
    ['Nombre de Producto: ', nombreProducto], 
    ['Valor unitario de producto: ', valorProducto],
    ['Cantidad de productos: ', cantidadProducto], 
    ['Valor total: ', valorTotal], 
    ['Valor del descuento: ', descuento], 
    ['Valor total con descuento: ', valorTotalDescuento]
]

Tabla = """\
_____________________________________________________
|                 FACTURA DE VENTA                  |
|___________________________________________________|
|              Campo                |     Valor     |
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
{}
|___________________________________|_______________|
"""

Tabla = (Tabla.format(
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[0:1]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[1:2]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[2:3]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[3:4]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[4:5]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[5:6]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[6:7]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[7:8]),
    '\n'.join("| {:<34}| {:<13} |".format(*fila) for fila in mi_tabla[8:9])))
print(Tabla)
