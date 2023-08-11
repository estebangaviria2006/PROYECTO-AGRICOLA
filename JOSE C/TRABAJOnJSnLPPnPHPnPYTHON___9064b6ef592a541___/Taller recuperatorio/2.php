<!DOCTYPE html>
<html>
<head>
    <title>Diagnóstico de Anemia</title>
</head>
<body>
    <h1>Diagnóstico de Anemia</h1>
    <form method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required>
        <select id="unidadEdad" name="unidadEdad" required>
            <option value="meses">Meses</option>
            <option value="años">Años</option>
        </select>
        <br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select>
        <br>
        <label for="hemoglobina">Nivel de Hemoglobina (g%):</label>
        <input type="number" id="hemoglobina" name="hemoglobina" step="0.1" required>
        <br>
        <button type="submit">Calcular Diagnóstico</button>
    </form>
    
    <?php
    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;
    $unidadEdad = isset($_POST['unidadEdad']) ? $_POST['unidadEdad'] : "";
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "";
    $hemoglobina = isset($_POST['hemoglobina']) ? floatval($_POST['hemoglobina']) : 0.0;

    $resultado = "";

    if (($unidadEdad === "meses" && $edad >= 0 && $edad <= 12) ||
        ($unidadEdad === "años" && $edad >= 0 && $edad <= 120)) {
        if (($unidadEdad === "meses" && $edad <= 1 && $hemoglobina >= 13 && $hemoglobina <= 26) ||
            ($unidadEdad === "meses" && $edad > 1 && $edad <= 6 && $hemoglobina >= 10 && $hemoglobina <= 18) ||
            ($unidadEdad === "meses" && $edad > 6 && $edad <= 12 && $hemoglobina >= 11 && $hemoglobina <= 15) ||
            ($unidadEdad === "años" && $edad > 1 && $edad <= 5 && $hemoglobina >= 11.5 && $hemoglobina <= 15) ||
            ($unidadEdad === "años" && $edad > 5 && $edad <= 10 && $hemoglobina >= 12.6 && $hemoglobina <= 15.5) ||
            ($unidadEdad === "años" && $edad > 10 && $edad <= 15 && $hemoglobina >= 13 && $hemoglobina <= 15.5) ||
            ($unidadEdad === "años" && $sexo === "mujer" && $edad > 15 && $hemoglobina >= 13 && $hemoglobina <= 26) ||
            ($unidadEdad === "años" && $sexo === "hombre" && $edad > 15 && $hemoglobina >= 14 && $hemoglobina <= 18)) {
            $resultado = "Negativo: No tiene anemia.";
        } else {
            $resultado = "Positivo: Tiene anemia.";
        }
    } else {
        $resultado = "Error: La edad ingresada está fuera del rango permitido.";
    }
    ?>

    <p>Resultado: <?php echo $resultado; ?></p>
</body>
</html>
