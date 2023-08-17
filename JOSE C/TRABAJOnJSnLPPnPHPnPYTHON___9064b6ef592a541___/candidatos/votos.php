<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Votación</title>
</head>
<body>
    <h1>Elecciones </h1>
    <form method="post">
        <label for="candidate">Selecciona un candidato:</label>
        <select name="candidate" id="candidate">
            <option value="#">Selecciona un candidato...</option>
            <option value="1">Sergio Mauricio Zúñiga</option>
            <option value="2">Yider Luna Joven</option>
            <option value="3">Franklin Alexander Vega</option>
            <option value="4">Voto en blanco</option>
        </select>
        <button type="submit" name="vote">Votar</button>
        <button type="submit" name="reset">Borrar Votos</button>
    </form>

    
    <?php
    /* crea una sesión o reanuda la actual basada en un identificador de sesión pasado */
    session_start();

        /* se utiliza para verificar si una variable está definida y su valor no es NULL */
    if (!isset($_SESSION['votes'])) {
        $_SESSION['votes'] = array(1 => 0, 2 => 0, 3 => 0, 4 => 0);
    }
              /* es una variable superglobal que se utiliza para recopilar datos de un formulario HTML y enviarlos a un script de PHP */
    if (isset($_POST['vote'])) {
        $selectedCandidate = $_POST['candidate'];

        if ($selectedCandidate == "#") {
            echo "<p style='color: black;'>Error: No has seleccionado ningún candidato.</p>";
        } else {
             /* es un array especial utilizado para guardar información a 
            través de los requests que un usuario hace durante su visita a un sitio web o aplicación. */
            $_SESSION['votes'][$selectedCandidate]++;
        }
    }
        /* se utiliza para verificar si una variable está definida y su valor no es NULL */
    if (isset($_POST['reset'])) {
        $_SESSION['votes'] = array(1 => 0, 2 => 0, 3 => 0, 4 => 0);
    }

    echo '<h2>Resultados:</h2>';

    /* es un tipo especial de bucle que permite recorrer estructuras que contienen varios elementos 
    (como matrices, recursos u objetos) sin necesidad de preocuparse por el número de elementos */
    foreach ($_SESSION['votes'] as $candidateId => $votes) {
        echo "Candidato $candidateId: $votes votos<br>";
    }
                /* devuelve el valor del parámetro considerado "el mayor" según las reglas de comparación estándar */
    $maxVotes = max($_SESSION['votes']);

            /* devuelve las claves, numéricas y de tipo string, del array  */
    $winners = array_keys($_SESSION['votes'], $maxVotes);

       /* devuelve el número de elementos que hay en el array */
    if (count($winners) === 1) {
        $winner = $winners[0];
        echo "<h2>Ganador: Candidato $winner</h2>";
    } elseif ($maxVotes === 0) {
        echo "<h2>No se ha registrado ningún voto.</h2>";
    } else {
                                                   /* Devuelve un string que contiene la representación de todos los elementos del array en el mismo orden */
        echo "<h2>Empate entre los candidatos: " . implode(', ', $winners) . "</h2>";
    }
                   /* devuelve la suma de los valores de un array */
    $totalVotes = array_sum($_SESSION['votes']);
    echo "<h2>Total de votos: $totalVotes</h2>";
    ?>



</body>
</html>