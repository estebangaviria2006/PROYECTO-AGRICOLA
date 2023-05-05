function getFicha(){
    alert()

    let producto = document.getElementById("nom_producto").value 
    document.getElementById("resproduct").innerText=producto

    let linea = document.getElementById("linea").value 
    document.getElementById("resproductoo").innerText=linea

    let versiones = document.getElementById("versiones").value 
    document.getElementById("resproduc").innerText=versiones

    let actuales = document.getElementById("actuales").value 
    document.getElementById("resver").innerText=actuales

    let modulo = document.getElementById("modulo").value 
    document.getElementById("resmo").innerText=modulo 

    let descripciong = document.getElementById("descripcionG").value 
    document.getElementById("resdescripG").innerText=descripciong

    let hardware = document.getElementById("hardware").value 
    document.getElementById("reshardware").innerText=hardware

    let software = document.getElementById("software").value 
    document.getElementById("ressoftware").innerText=software 

    let requerimientos = document.getElementById("requerimientos").value 
    document.getElementById("resquerimientos").innerText=requerimientos 

    let requerimientosA = document.getElementById("requerimientosA").value 
    document.getElementById("resquerimientosA").innerText=requerimientosA
}