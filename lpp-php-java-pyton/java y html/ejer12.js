function revisar() {
    let email, password
    email = document.getElementById("correo").value
    password = document.getElementById("password").value

    if(email.toLowerCase() == "fund@gmail.com" && password  == "123456") {
        men = document.getElementById("alert");
        men.innerHTML = "Bienvenidos a fundamentos de la programación"
    }
    else {
        men = document.getElementById("alert");
        men.innerHTML = "Error en los datos de ingreso"
    }
}