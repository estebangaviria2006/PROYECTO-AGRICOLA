function pow() {
    let res1, res2, resul
    
    res1 = parseFloat(document.getElementById("r1").value)
    res2 = parseFloat(document.getElementById("r2").value)
    
    req = (res1*res2)/(res1+res2)
    uwu = document.getElementById("resultado")
    uwu.innerHTML = "La resistencia equivalente es "+ req
    }
    