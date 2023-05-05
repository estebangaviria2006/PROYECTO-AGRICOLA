//mostrar el resultado HTML//
const n = document.querySelector("#datoNombre")
const a = document.querySelector("#datoApellido")
const c = document.querySelector("#datoCorreo")
const t = document.querySelector("#datoTelefono")
const f = document.querySelector("#datoFecha")
const i = document.querySelector("#datoTarjeta")
function almacenarData(){
    let nom, ape, fec, cor, tel, tar
    //capturar la data del HTML//
    nom = document.getElementById("nombre").value
    ape = document.getElementById("apellido").value
    cor = document.getElementById("correo").value
    tel = document.getElementById("telefono").value
    fec = document.getElementById("fecha").value
    tar = document.getElementById("tarjeta").value
    //almacenamiento loacal con localStorage//
   
    localStorage.setItem("Nombre", nom)
    localStorage.setItem("Apellido", ape)
    localStorage.setItem("Correo", cor)
    localStorage.setItem("Telefono", tel)
    localStorage.setItem("Fecha", fec)
    localStorage.setItem("Tarjeta", tar)

    //Limpiando los campos o inputs//
    document.getElementById("nombre").value = ""
    document.getElementById("apellido").value = ""
    
    document.getElementById("correo").value = ""
    document.getElementById("telefono").value = ""
    document.getElementById("fecha").value = ""
    document.getElementById("tarjeta").value = ""
}
function cargarData(){
let nombre, apellido, fecha, correo, tarjeta 
nombre = localStorage.getItem("Nombre")
apellido = localStorage.getItem("Apellido")
correo = localStorage.getItem("Correo")
telefono = localStorage.getItem("Telefono")
fecha = localStorage.getItem("Fecha")
tarjeta = localStorage.getItem("Tarjeta")
/* Mostrar Datos Almacenados*/
n.innerHTML = nombre
a.innerHTML = apellido
c.innerHTML = correo
t.innerHTML = telefono
f.innerHTML = fecha
i.innerHTML = tarjeta
}