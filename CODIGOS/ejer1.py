def factura():
    ciudad = str(input("Ingrese su ciudad de compra: "))
    if ciudad.isdigit() or ciudad == '':
        print('Error en la información')
        return
    fecha = input("Ingrese la fecha de compra ejem(11-08-2023): ")
    if fecha.isdigit() or fecha == '':
        print('Error en la información')
        return
    nombre = input("Ingrese su nombre: ")
    if nombre.isdigit() or nombre == '':
        print('Error en la información')
        return
    nombreProducto = input("Escribe el nombre del producto: ")
    if nombreProducto.isdigit() or nombreProducto == '':
        print('Error en la información')
        return
    valorProducto = float(input("Ingrese el valor del producto: "))
    if valorProducto == '':
        print('Error en la información')
        return
    cantidadProducto = int(input("Ingrese la cantidad de produtos: "))
    if cantidadProducto == '':
        print('Error en la información')
        return
    
    valorTotal = round(valorProducto * cantidadProducto, 2)
    descuento =  round((valorTotal*17.5)/100, 2)
    descuentoTotal =  valorTotal - descuento
    if  fecha == "11-08-2023" and valorProducto > 0 and cantidadProducto > 0:
        print ("")
        print ("En la ciudad de ",ciudad," el día ",fecha )
        print ("Realizo una compra la persona ",nombre)
        print ("Se realizo una compra de ",nombreProducto)
        print ("El valor unitario por producto fue de ",valorProducto)
        print ("La cantidad de productos que llevo fue ", cantidadProducto)
        print ("El valor total a pagar es: ",valorTotal)
        print ("A su compra se le hará un descuento de: ",descuento)
        print ("El valor total a pagar con descuento es de: ",descuentoTotal)
        print ("")
    elif fecha != "11-08-2023" and valorProducto > 0 and cantidadProducto > 0:
        print ("")
        print ("El valor total a pagar es: ",valorTotal)
        print ("")
    elif valorProducto < 0:
        print ("")
        print ("Error, no se admiten números negativos") 
        print ("")
    elif cantidadProducto < 0:
        print ("")
        print ("Error, no se admiten números negativos") 
        print ("")
    elif valorProducto < 0 and cantidadProducto < 0 and valorTotal < 0:
        print ("")
        print ("Error, no se admiten números negativos") 
        print ("")