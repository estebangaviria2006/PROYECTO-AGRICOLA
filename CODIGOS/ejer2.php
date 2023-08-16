
<form action="#" method="post" >
    <h1>Verificador de Anemia</h1>
    <span>Seleccione su edad o género: </span>
    <select name="edad" required>
        <option value="">Seleccionar...</option>
        <option value="0-1">0 - 1 mes</option>
        <option value="1-6"> 1 y <= 6 meses</option>
        <option value="6-12"> 6 y <= 12 meses</option>
        <option value="1-5"> 1 y <= 5 años</option>
        <option value="5-10"> 5 y <= 10 años</option>
        <option value="10-15"> 10 y <= 15 años</option>
        <option value="femenino"> Mujeres > 15 años</option>
        <option value="masculino"> Hombres > 15 años</option>
    </select><br><br>
    <span>Escribe su nivel de hemoglobina: </span>
    <input step="any" type="number" name="hemoglobina" placeholder="Hemoglobina" required><br><br>
    <button type="submit">Validar</button>
</form>

<?php
session_start();
    $hemoglobina = $_POST["hemoglobina"];
    $edad= $_POST["edad"];

    if ($edad == "0-1" && $hemoglobina != "") {
        if ($hemoglobina >= 13 && $hemoglobina <= 26) {
            echo  "Normal";
        } elseif ($hemoglobina > 26) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 13 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        } elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "1-6" && $hemoglobina != "") {
        if ($hemoglobina >= 10 && $hemoglobina <= 18) {
            echo  "Normal";
        } elseif ($hemoglobina > 18) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 10 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "6-12" && $hemoglobina != "") {
        if ($hemoglobina >= 11 && $hemoglobina <= 15) {
            echo  "Normal";
        } elseif ($hemoglobina > 15) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 11 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "1-5" && $hemoglobina != "") {
        if ($hemoglobina >= 11.5 && $hemoglobina <= 15) {
            echo  "Normal";
        } elseif ($hemoglobina > 15) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 11.5 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "5-10" && $hemoglobina != "") {
        if ($hemoglobina >= 12.6 && $hemoglobina <= 15.5) {
            echo  "Normal";
        } elseif ($hemoglobina > 15.5) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 12.6 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "10-15" && $hemoglobina != "") {
        if ($hemoglobina >= 13 && $hemoglobina <= 15.5) {
            echo  "Normal";
        } elseif ($hemoglobina > 15.5) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 13 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "femenino" && $hemoglobina != "") {
        if ($hemoglobina >= 12 && $hemoglobina <= 16) {
            echo  "Normal";
        } elseif ($hemoglobina > 16) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 12 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

    if ($edad == "masculino" && $hemoglobina != "") {
        if ($hemoglobina >= 14 && $hemoglobina <= 18) {
            echo  "Normal";
        } elseif ($hemoglobina > 18) {
            echo "Tienes un transtorno";
        } elseif ($hemoglobina < 14 && $hemoglobina >= 0) {
            echo "Tienes anemia";
        }  elseif ($hemoglobina < 0){
            echo "Los números ingresados no pueden ser negativos";
        }
    }

?>
