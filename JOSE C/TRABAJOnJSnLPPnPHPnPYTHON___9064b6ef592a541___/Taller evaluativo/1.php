//1-Sergio Mauricio Zúñiga 2- Yider Luna Joven 3- Franklin Alexander Vega 4- Voto en blanco Usted debe elaborar un sistema donde permita: Votar por un candidato. El sistema deberá permitir votar por un candidato. El Sistema deberá mostrar el ganador. Cantidad de votos totales.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Votación Alcalde Pitalito</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="candidato1">Sergio Mauricio Zúñiga</label>
        <input type="number" id="candidato1" name="candidato1"><br><br>
        <label for="candidato2">Yider Luna Joven</label>
        <input type="number" id="candidato2" name="candidato2"><br><br>
        <label for="candidato3">Franklin Alexander Vega</label>
        <input type="number" id="candidato3" name="candidato3"><br><br>
        <label for="voto_blanco">Voto en blanco</label>
        <input type="number" id="voto_blanco" name="voto_blanco"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $candidato1 = $_POST["candidato1"];
            $candidato2 = $_POST["candidato2"];
            $candidato3 = $_POST["candidato3"];
            $voto_blanco = $_POST["voto_blanco"];

            $total_votos = $candidato1 + $candidato2 + $candidato3 + $voto_blanco;

            if ($total_votos > 0) {
                $candidatos = array("Sergio Mauricio Zúñiga", "Yider Luna Joven", "Franklin Alexander Vega", "Voto en blanco");
                $votos = array($candidato1, $candidato2, $candidato3, $voto_blanco);

                $max_votos = max($votos);
                $ganadores = array();
                $empates = array();

                for ($i = 0; $i < count($votos); $i++) {
                    if ($votos[$i] == $max_votos) {
                        $ganadores[] = $i;
                    } else {
                        $empates[] = $i;
                    }
                }

                if (count($ganadores) == 1) {
                    $ganador_index = $ganadores[0];
                    echo "<p>El ganador es el candidato " . ($ganador_index + 1) . " (" . $candidatos[$ganador_index] . ")</p>";
                } else {
                    echo "<p>Hay empate entre los siguientes candidatos:</p>";
                    foreach ($ganadores as $index) {
                        echo "<p>Candidato " . ($index + 1) . " (" . $candidatos[$index] . ")</p>";
                    }
                }

                foreach ($votos as $index => $candidato) {
                    echo "<p>El candidato " . ($index + 1) . " (" . $candidatos[$index] . ") obtuvo " . $candidato . " votos</p>";
                }

                echo "<p>El total de votos es " . $total_votos . "</p>";
            } else {
                echo "<p>No se registraron votos</p>";
            }
        }
    ?>
</body>
</html>
