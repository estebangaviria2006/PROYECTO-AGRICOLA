function validar(){

    let hemoglobina, edad

    hemoglobina = document.getElementById("hemoglobina").value 
    edad = document.getElementById("edad").value 

    respuesta = document.getElementById("resp")

    if (edad == "") {
        alert  ("Error llena los espacios");
        return  
    }
    if (hemoglobina == "") {
        alert  ("Error llena los espacios");
        return  
    }

    if (edad == "0-1") {
        if (hemoglobina >= 13 && hemoglobina <= 26) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 26) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 13 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        } else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "1-6") {
        if (hemoglobina >= 10 && hemoglobina <= 18) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 18) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 10 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "6-12") {
        if (hemoglobina >= 11 && hemoglobina <= 15) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 15) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 11 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "1-5") {
        if (hemoglobina >= 11.5 && hemoglobina <= 15) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 15) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 11.5 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "5-10") {
        if (hemoglobina >= 12.6 && hemoglobina <= 15.5) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 15.5) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 12.6 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "10-15") {
        if (hemoglobina >= 13 && hemoglobina <= 15.5) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 15.5) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 13 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "femenino") {
        if (hemoglobina >= 12 && hemoglobina <= 16) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 16) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 12 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
    if (edad == "masculino") {
        if (hemoglobina >= 14 && hemoglobina <= 18) {
            respuesta = document.getElementById("resp");
            respuesta.innerHTML = "Normal"
        } else if (hemoglobina > 18) {
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes un transtorno "
        } else if (hemoglobina < 14 && hemoglobina >= 0) {            
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Tienes anemia "
        }  else if (hemoglobina < 0 ){
            respuesta = document.getElementById("resp")
            respuesta.innerHTML = "Los números no pueden ser negativos"
        }
    }
}