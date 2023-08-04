function calcular() {
  let nombre,genero,salario,tiempo,aumento20,aumento15

  nombre = document.getElementById("nombre").value
  genero = document.getElementById("genero").value
  salario = parseFloat(document.getElementById("salario").value)
  tiempo = parseFloat(document.getElementById("tiempo").value)
  mensaje = document.getElementById("mensaje");

  aumento20 = (salario * 0.20);
  bonificaicon20 = salario + aumento20;
  aumento15 = (salario * 0.15);
  bonificaicon15 = salario + aumento15;
  
  genero = genero.toLowerCase();

  if(genero == "femenino" || genero == "2"){
    if(tiempo > 5)   
    mensaje.innerHTML = "Hola "+nombre+" su salario basico es de "+salario+" y su salario con el aumento es de "+bonificaicon20
    if(tiempo <= 5)
    mensaje.innerHTML = "Hola "+nombre+" su salario basico es de "+salario+" y su salario con el aumento es de "+bonificaicon15
    }

  if(genero == "masculino" || genero == "1"){
      if(tiempo > 6)
      mensaje.innerHTML = "Hola "+nombre+" su salario basico es de "+salario+" y su salario con el aumento es de "+bonificaicon20
      if(tiempo <= 6)
      mensaje.innerHTML = "Hola "+nombre+" su salario basico es de "+salario+" y su salario con el aumento es de "+bonificaicon15
    }
    if (genero != "femenino" && genero != "2" && genero != "masculino" && genero != "1") {
      mensaje.innerHTML = "El genero ingresado no es valido"
}
}

