<!DOCTYPE html>
<html>
<head>
    <title>Elecciones de Alcaldes</title>
</head>
<body>

<h2>Elecciones Alcaldes </h2>

<span> Ingrese en cada casilla el numero de votos</span> 
<br><br>
<form method="post" action="">
    <label for="voto_sergio">Sergio Mauricio Zúñiga:</label>
    <input type="number" id="voto_sergio" name="votos[Sergio Mauricio Zúñiga]" min="0"><br>

    <label for="voto_yider">Yider Luna Joven:</label>
    <input type="number" id="voto_yider" name="votos[Yider Luna Joven]" min="0"><br>

    <label for="voto_franklin">Franklin Alexander Vega:</label>
    <input type="number" id="voto_franklin" name="votos[Franklin Alexander Vega]" min="0"><br>

    <label for="voto_blanco">Voto en blanco:</label>
    <input type="number" id="voto_blanco" name="votos[Voto en blanco]" min="0"><br>

    <br>
    <input type="submit" name="votar" value="Votar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["votos"])) {
    $candidatos = [
        "Sergio Mauricio Zúñiga",
        "Yider Luna Joven",
        "Franklin Alexander Vega",
        "Voto en blanco"
    ];

    $votos = $_POST["votos"];

    // Validar votos no negativos
    foreach ($votos as $candidato => $cantidad) {
        $votos[$candidato] = max(0, (int)$cantidad);
    }

    $totalVotos = array_sum($votos);
    $maxVotos = max($votos);
    $ganadores = array_keys($votos, $maxVotos);

    echo "<h3>Resultados:</h3>";
    foreach ($candidatos as $candidato) {
        $votosCandidato = $votos[$candidato];
        echo "$candidato: $votosCandidato votos<br>";
    }

    echo "<h3>Resultado Final:</h3>";
    if (count($ganadores) > 1) {
        echo "Empate entre: " . implode(", ", $ganadores);
    } else {
        echo "Ganador: " . $ganadores[0];
    }

    echo "<h3>Total de Participantes: $totalVotos</h3>";
}
?>

</body>
</html>