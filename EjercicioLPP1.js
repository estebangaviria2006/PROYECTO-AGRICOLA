function getnom() {
    var j = document.getElementById ("Bienvenido");

    var nombre = document.getElementById("nombre").value;
    var apellido= document.getElementById("apellido").value;

    j.innerText = "Bienvenido "+nombre+" "+apellido;
}