mi_tabla = [
    ['Ciudad: ', 'Bogota'], 
    ['fecha: ', '24-12-2023'], 
    ['nombre del cliente: ', 'Juan'],
    ['Nombre de Producto: ', 'Arroz'], 
    ['Valor unitario de producto: ', '2000'],
    ['Cantidad de productos: ', '10'], 
    ['Valor total: ', '20.000'], 
    ['Valor del descuento: ', '17.5%'], 
    ['Valor total con descuento: ', '16.500']
]

# mi_tabla que contiene un array y cada uno tiene dos elementos

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

# "Tabla" Representa la plantilla de la tabla final. Esta plantilla tiene líneas horizontales que separan encabezados y filas, las cuales son las "_____________..." y utiliza marcadores de posición {:<35} y {:<13} para alinear y dar formato a los datos.

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

# "Join se utiliza para unir elementos, en este caso unimos filas con el salto de linea"