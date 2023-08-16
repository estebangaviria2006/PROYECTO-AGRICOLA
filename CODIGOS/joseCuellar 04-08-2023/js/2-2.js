function calcular() {
  let samsung, motorola, huawei, valor1, valor2, valor3, valor4, valor5, valor6, valor7,descuento, cantidadPorMarca, cantidadPorMarca2, precioPorMarca, precioPorMarca2,mensaje, total

  samsung = parseInt(document.getElementById("samsung").value)
  motorola = parseInt(document.getElementById("motorola").value)
  huawei = parseInt(document.getElementById("huawei").value)

  cantidadPorMarca = document.getElementById("cantidadPorMarca");
  cantidadPorMarca2 = document.getElementById("cantidadPorMarca2")
  precioPorMarca = document.getElementById("precioPorMarca");
  precioPorMarca2 = document.getElementById("precioPorMarca2");
  descuento = document.getElementById("descuento");
  mensaje = document.getElementById("mensaje");

  valor1 = (samsung*600000);
  valor2 = (motorola*500000);
  valor3 = (huawei*550000);
  valor4 = (valor1+valor2+valor3);
  valor5 = (valor1+valor2);
  valor6 = (valor2+valor3);
  valor7 = (valor1+valor3);
  descuento = valor4 - (((valor1 + valor2 + valor3)*5)/100);
  total = (valor1+valor2+valor3);

  if (samsung < 1 && motorola < 1 && huawei < 1) {
    mensaje.innerHTML = "Ingresaste 3 números negativo, VUELVE A REALIZAR LA COMPRA"
    return
  }
  if ( samsung <= 10 && motorola <= 10 && huawei <= 10 && samsung >= 1 && motorola >= 1 && huawei >= 1 ) {      
    cantidadPorMarca.innerHTML = "La cantidad de samsung escogidos fueron: "+samsung+"<br> La cantidad de motorola fueron: "+motorola+"<br> Y finalmente la cantidad por huawei son: "+huawei
    precioPorMarca.innerHTML = "El precio por la cantidad de samsung es: "+valor1+"<br>  El precio por la cantidad de motorola es: "+valor2+"<br> El precio por la cantidad de huawei es: "+valor3
    mensaje.innerHTML = "El precio total a pagar es: "+total
    return
  }
  if (samsung > 10 && motorola > 10 && huawei > 10 ) {
    cantidadPorMarca.innerHTML = "La cantidad de samsung escogidos fueron: "+samsung+"<br> La cantidad de motorola fueron: "+motorola+"<br> Y finalmente la cantidad por huawei son: "+huawei  
    precioPorMarca.innerHTML = "El precio por la cantidad de samsung es: "+ valor1+"<br> El precio por la cantidad de motorola es: "+valor2+"<br> El precio por la cantidad de huawei es: "+valor3
    mensaje.innerHTML = "Como llevaste 10 cantidades de cada producto se te hizo un descuento de 5%, el cual el total que debes pagar sera de :"+descuento
    return
  }
  if (samsung < 1 && motorola >= 1 && huawei >= 1) {
    mensaje.innerHTML = "Error al ingresar los datos de samsung"
    return
  }
  if (samsung >= 1 && motorola < 1 && huawei >= 1) {
    mensaje.innerHTML = "Error al ingresar los datos de motorola"
    return
  }
  if (samsung >= 1 && motorola >= 1 && huawei < 1) {
    mensaje.innerHTML = "Error al ingresar los datos de huawei"
    return
  }
  if (samsung >= 1 && motorola >= 1) {
    cantidadPorMarca.innerHTML = "La cantidad de samsung escogidos fueron: "+samsung
    cantidadPorMarca2.innerHTML = "La cantidad de motorola escogidos fueron: "+motorola
    precioPorMarca.innerHTML = "El precio por la cantidad de samsung es: "+valor1
    precioPorMarca2.innerHTML = "El precio por la cantidad de motorola es: "+valor2
    mensaje.innerHTML = "El total a pagar por los celulares es: "+valor5
    return
  }
  if (motorola >= 1 && huawei >= 1) {
    cantidadPorMarca.innerHTML = "La cantidad de motorola escogidos fueron: "+motorola
    cantidadPorMarca2.innerHTML = "La cantidad de huawei escogidos fueron: "+huawei
    precioPorMarca.innerHTML = "El precio por la cantidad de motorola es: "+valor2
    precioPorMarca2.innerHTML = "El precio por la cantidad de huawei es: "+valor3
    mensaje.innerHTML = "El total a pagar por los celulares es: "+valor6
    return
  }
  if (samsung >= 1 && huawei >= 1) {
    cantidadPorMarca.innerHTML = "La cantidad de samsung escogidos fueron: "+samsung
    cantidadPorMarca2.innerHTML = "La cantidad de huawei escogidos fueron: "+huawei
    precioPorMarca.innerHTML = "El precio por la cantidad de samsung es: "+valor1
    precioPorMarca2.innerHTML = "El precio por la cantidad de huawei es: "+valor3
    mensaje.innerHTML = "El total a pagar por los celulares es: "+valor7
    return
  }
  if (samsung < 1 && motorola < 1) {
    mensaje.innerHTML = "Ingresaste 2 números innecesarios en Samsung y en Motorola, VUELVE A REALIZAR LA COMPRA "
    return
  }
  if (samsung < 1 && huawei < 1) {
    mensaje.innerHTML = "Ingresaste 2 números innecesarios en Samsung y en Huawei, VUELVE A REALIZAR LA COMPRA "
    return   
  }
  if (motorola < 1 && huawei < 1) {
    mensaje.innerHTML = "Ingresaste 2 números innecesarios en Motorola y Huawei, VUELVE A REALIZAR LA COMPRA  "
    return
  }
  if (samsung < 1) {
    mensaje.innerHTML = "Ingresaste un número negativo en Samsung "
    return
  }
  if (motorola < 1) {
    mensaje.innerHTML = "Ingresaste un número negativo en motorola "
    return
  }
  if (huawei < 1 ) {
    mensaje.innerHTML = "Ingresaste un número negativo en huawei "
    return
  }
  if (samsung >= 1) {
    cantidadPorMarca.innerHTML = "La cantidad de samsung escogidos fueron: "+samsung
    precioPorMarca.innerHTML = "El precio por la cantidad de samsung es: "+valor1
    return
  }
  if (motorola >= 1) {
    cantidadPorMarca.innerHTML = "La cantidad de motorola escogidos fueron: "+motorola
    precioPorMarca.innerHTML = "El precio por la cantidad de motorola es: "+valor2
    return
  }
  if (huawei >= 1 ) {
    cantidadPorMarca.innerHTML = "La cantidad de huawei escogidos fueron: "+huawei
    precioPorMarca.innerHTML = "El precio por la cantidad de huawei es: "+valor3
    return
  }
}
