import datetime

def main():
    print("Factura de Venta con Descuento")
    
    ciudad_fecha = input("Ciudad y Fecha: ")
    nombre_cliente = input("Nombre del cliente: ")
    nombre_producto = input("Nombre del producto: ")
    
    while True:
        try:
            valor_producto = float(input("Valor del producto: "))
            cantidad_producto = int(input("Cantidad del producto: "))
            break
        except ValueError:
            print("Debe ingresar una respuesta.")
    
    valor_total = valor_producto * cantidad_producto
    descuento = valor_total * 0.175
    valor_total_descuento = valor_total - descuento
    
    print("\nFactura de Venta")
    print(f"Ciudad y Fecha: {ciudad_fecha}")
    print(f"Nombre del cliente: {nombre_cliente}")
    print(f"Nombre del producto: {nombre_producto}")
    print(f"Valor del producto: {valor_producto}")
    print(f"Cantidad del producto: {cantidad_producto}")
    print(f"Valor total: {valor_total}")
    print(f"Valor del descuento: {descuento}")
    print(f"Valor total con descuento: {valor_total_descuento}")

if __name__ == "__main__":
    main()
