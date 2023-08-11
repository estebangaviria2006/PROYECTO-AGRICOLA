function calcularDiagnostico() {
            const edad = parseFloat(document.getElementById("edad").value);
            const unidadEdad = document.getElementById("unidadEdad").value;
            const sexo = document.getElementById("sexo").value;
            const hemoglobina = parseFloat(document.getElementById("hemoglobina").value);
            
            let resultado = "";
            let error = false;

            if (unidadEdad === "meses") {
                if (edad < 0 || edad > 12) {
                    error = true;
                }
            } else if (unidadEdad === "años") {
                if (edad < 0 || edad > 120) {
                    error = true;
                }
            } else {
                error = true;
            }

            if (error) {
                resultado = "Error: La edad ingresada se encuentras fuera del rango permitido.";
            } else {
                if ((unidadEdad === "meses" && edad <= 1 && hemoglobina >= 13 && hemoglobina <= 26) ||
                    (unidadEdad === "meses" && edad > 1 && edad <= 6 && hemoglobina >= 10 && hemoglobina <= 18) ||
                    (unidadEdad === "meses" && edad > 6 && edad <= 12 && hemoglobina >= 11 && hemoglobina > 15) ||
                    (unidadEdad === "años" && edad > 1 && edad <= 5 && hemoglobina >= 11.5 && hemoglobina <= 15) ||
                    (unidadEdad === "años" && edad > 5 && edad <= 10 && hemoglobina >= 12.6 && hemoglobina <= 15.5) ||
                    (unidadEdad === "años" && edad > 10 && edad <= 15 && hemoglobina >= 13 && hemoglobina <= 15.5) ||
                    (unidadEdad === "años" && sexo === "mujer" && edad > 15 && hemoglobina >= 13 && hemoglobina <= 26) ||
                    (unidadEdad === "años" && sexo === "hombre" && edad > 15 && hemoglobina >= 14 && hemoglobina <= 18)) {
                    resultado = "Negativo: No tiene anemia.";
                } else {
                    resultado = "Positivo: Tiene anemia.";
                }
            }

            document.getElementById("resultado").textContent = "Resultado: " + resultado;
        }

