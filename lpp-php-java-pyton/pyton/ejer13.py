nombre = input("Ingrese su nombre: ")
genero = input("Ingrese su genero (hombre o mujer): ")
salario = input("Ingrese su salario: ")
tiempo = int(input("Ingrese el tiempo de servicio: "))
aumento15 = (salario*0.15)
bonificacion15 = salario+aumento15
aumento20 = (salario*0.2)
bonificacion20 = salario+aumento20

if(genero == "Hombre"):
    if(tiempo> 5):
        print('Hola',nombre, 'su salario basico es de ',salario,'pero con la bonificacion del 20% su salario sera de',bonificacion20)
    elif(tiempo <= 5):
         print('Hola',nombre, 'su salario basico es de ',salario,'pero con la bonificacion del 15% su salario sera de',bonificacion15)
if(genero == "Mujer"):
    if(tiempo> 6):
        print('Hola',nombre, 'su salario basico es de ',salario,'pero con la bonificacion del 20% su salario sera de',bonificacion20)
    elif(tiempo <= 6):
         print('Hola',nombre, 'su salario basico es de ',salario,'pero con la bonificacion del 15% su salario sera de',bonificacion15)