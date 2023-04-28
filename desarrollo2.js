function VT(){
    let cantidad
    cantidad = document.getElementById("cantidad").value

    let valor
    valor = document.getElementById("valor").value
    // let n2
    // n2 = document.getElementById("numero2").value
    let valorTotal
    valorTotal = cantidad*valor


    document.getElementById("valor total").innerHTML = 
    "<div> el valor es "+ valorTotal +"</div>"
}

function FA(){
    let cantidad
    cantidad = document.getElementById("cantidad").value

    let valor
    valor = document.getElementById("valor").value
    // let n2
    // n2 = document.getElementById("numero2").value
    let valorTotal
    valorTotal = cantidad*valor


    document.getElementById("factura").innerHTML = 
    "<div> el valor es "+ valorTotal +"</div>"
}