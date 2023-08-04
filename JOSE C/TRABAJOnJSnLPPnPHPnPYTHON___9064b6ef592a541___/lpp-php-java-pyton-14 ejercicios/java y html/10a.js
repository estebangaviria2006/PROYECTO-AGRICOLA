function submit() {
    let a, b, c, raiz

    a = parseInt(document.getElementById("a").value)
    b = parseInt(document.getElementById("b").value)
    c = parseInt(document.getElementById("c").value)

    raiz = sqrt ((b**2)- 4*a*c)
    x1 = (-(b)+ raiz)/(2*a)
    x2 = (-(b)- raiz)/(2*a)


    Resultado = document.getElementById("resultado");
    Resultado.innerHTML = "Resultado: <br>"


    uno = document.getElementById("resultado");
    uno.innerHTML = "El valor de x1 es: " + x1;

    dos = document.getElementById("resultado");
    dos.innerHTML = "El valor de x2 es: " + x2;

}