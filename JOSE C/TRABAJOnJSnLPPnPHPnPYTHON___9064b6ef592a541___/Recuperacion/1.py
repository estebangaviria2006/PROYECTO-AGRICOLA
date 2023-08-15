
while True:
    ciudad = input("Ingrese ciudad de residencia: ")
    if ciudad.isalpha():
        break
    else:
        print("Ingresa solo texto para la ciudad. Inténtalo de nuevo.")

while True:
    fecha = input("Ingrese fecha: ")  # Puedes validar la fecha de manera más específica si es necesario
    if fecha:
        break
    else:
        print("Ingresa una fecha válida. Inténtalo de nuevo.")

while True:
    nombre = input("Ingrese su nombre: ")
    if nombre.isalpha():
        break
    else:
        print("Ingresa solo texto para el nombre. Inténtalo de nuevo.")

while True:
    producto = input("Ingrese el nombre del producto: ")
    if producto.isalpha():
        break
    else:
        print("Ingresa solo texto para el producto. Inténtalo de nuevo.")

# Solicitar precio, asegurarse de que sea un número positivo
while True:
    precio = float(input("Ingrese el precio del producto: "))
    if precio > 0:
        break
    else:
        print("Ingresa un precio válido (positivo). Inténtalo de nuevo.")

# Solicitar cantidad, asegurarse de que no sea negativa
while True:
    cantidad = int(input("Ingrese la cantidad de productos: "))
    if cantidad >= 0:
        break
    else:
        print("Ingresa una cantidad válida (no negativa). Inténtalo de nuevo.")

# Calcular total antes de aplicar descuento
total = precio * cantidad

# Calcular descuento
descuento = total * 0.175  # 17.5% de descuento

# Calcular total con descuento
total_con_descuento = total - descuento

print("================================================")
print("FACTURA")

# Mostrar detalles de la factura
print("Ciudad:", ciudad, "\nFecha:", fecha)
print("Nombre:", nombre, "\nProducto:", producto, "\nValor del producto:", precio)
print("Cantidad:", cantidad)
print("Valor total:", total)
print("Valor del descuento:", descuento)
print("Valor total con descuento:", total_con_descuento)
