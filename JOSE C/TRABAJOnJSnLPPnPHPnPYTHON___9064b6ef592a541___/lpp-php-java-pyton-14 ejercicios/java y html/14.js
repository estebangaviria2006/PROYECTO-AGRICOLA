function calcular() {
    let Acidez, materia, fosforo, calcio, magnesio, aluminio
    materia = parseFloat(document.getElementById("materia").value)
    fosforo = parseFloat(document.getElementById("fosforo").value)
    calcio = parseFloat(document.getElementById("calcio").value)
    Acidez = parseFloat(document.getElementById("Acidez").value)
    magnesio = parseFloat(document.getElementById("magnesio").value)
    aluminio = parseFloat(document.getElementById("aluminio").value)
    if (Acidez >= 5 && Acidez <= 5.5 && materia > 8 &&
        fosforo > 30 &&
        calcio > 0.9 &&
        magnesio > 0.4 &&
        aluminio < 1) {
        mensaje = document.getElementById("res");
        mensaje.innerHTML = "APROBADO EL SUELO";
    } else {
        mensaje = document.getElementById("res");
        mensaje.innerHTML = "NO APROBADO EL SUELO";
    }
}