<form action="#" method="POST">
    <select name="candidato" id="candidato">
        <option value="">Seleccionar...</option>
        <option value="0">Sergio Mauricio Zuñiga</option>
        <option value="1">Yider Luna Joven</option>
        <option value="2">Franklin Alexander Vega</option>
        <option value="3">Voto en blanco</option>
    </select>
    <button type="submit">Votar</button>
</form>

<form action="#" method="POST">
    <input type="hidden" name="reiniciarVotos">
    <button type="submit">Reiniciar votos</button>
</form>

<?php

session_start();
if (isset($_POST['candidato'])) {
    $candidato = intval($_POST['candidato']);
    if (!isset($_SESSION['candidatos'])) {
        $_SESSION['candidatos'] = [0, 0, 0, 0];
    }
    $_SESSION['candidatos'][$candidato] += 1;
    var_dump($_SESSION['candidatos']);

    $candidato1 = $_SESSION['candidatos'][0];
    $candidato2 = $_SESSION['candidatos'][1];
    $candidato3 = $_SESSION['candidatos'][2];
    $candidato4 = $_SESSION['candidatos'][3];
    
    if ($candidato1 == $candidato2 && $candidato2 == $candidato3 && $candidato1 == $candidato3 && $candidato2 == $candidato4 && $candidato3 == $candidato4 && $candidato1 == $candidato4) {
        echo "<br><br> Todos los candidatos llevan la misma cantidad de votos";
        
        return;
    }elseif ($candidato1 > $candidato2 && $candidato1 > $candidato3 && $candidato1 > $candidato4) {
        echo "<br><br> El candidato: <br><br> Sergio Mauricio Zuñiga <br><br> posee la mayor cantidad de votos";
        return;
    }elseif ($candidato2 > $candidato1 && $candidato2 > $candidato3 && $candidato2 > $candidato4) {
        echo "<br><br> El candidato: <br><br> Yider Luna Joven <br><br> posee la mayor cantidad de votos";
        return;
    }elseif ($candidato3 > $candidato1 && $candidato3 > $candidato2 && $candidato3 > $candidato4) {
        echo "<br><br> El candidato: <br><br> Franklin Alexander Vega <br><br> posee la mayor cantidad de votos";
        return;
    }elseif ($candidato4 > $candidato1 && $candidato4 > $candidato2 && $candidato4 > $candidato3) {
        echo "<br><br> Los Votos en blanco <br><br> posee la mayor cantidad de votos";
        return;
    }elseif ($candidato1 == $candidato2 && $candidato1 > $candidato3 && $candidato1 > $candidato4) {
        echo "<br><br> Los candidatos: <br><br> Sergio Mauricio Zuñiga <br> Yider Luna Joven <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato2 == $candidato3 && $candidato2 > $candidato1 && $candidato2 > $candidato4) {
        echo "<br><br> Los candidatos: <br><br> Yider Luna Joven <br> Franklin Alexander Vega <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato3 && $candidato1 > $candidato2 && $candidato1 > $candidato4) {
        echo "<br><br> Los candidatos: <br><br> Sergio Mauricio Zuñiga  <br> Franklin Alexander Vega <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato4 && $candidato1 > $candidato2 && $candidato1 > $candidato3) {
        echo "<br><br> Los candidatos: <br><br> Sergio Mauricio Zuñiga <br> Votos en blanco <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato2 == $candidato4 && $candidato2 > $candidato1 && $candidato2 > $candidato3) {
        echo "<br><br> Los candidatos: <br><br> Yiber Luna Joven <br> Votos en blanco <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato3 == $candidato4 && $candidato3 > $candidato1 && $candidato3 > $candidato2) {
        echo "<br><br> Los candidatos: <br><br> Franklin Alexander Vega <br> Votos en blanco <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato2 && $candidato2 == $candidato3 && $candidato1 == $candidato3) {
        echo "<br><br> Los candidatos: <br><br> Sergio Mauricio Zuñiga <br> Yider Luna Joven <br> Franklin Alexander Vega <br><br> poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato2 && $candidato2 == $candidato4 && $candidato1 == $candidato4) {
        echo "<br><br> Los candidatos: <br><br> Sergio Mauricio Zuñiga <br> Yider Luna Joven <br> Votos en blanco <br><br> posseen la misma cantidad de votos";
        return;
    }elseif ($candidato1 == $candidato3 && $candidato3 == $candidato4 && $candidato1 == $candidato4) {
        echo "<br><br> Los candidatos: <br><br> Sergio Mauricio Zuñiga <br> Franklin Alexander Vega <br> Votos en blanco <br><br> posseen la misma cantidad de votos";
        return;
    }elseif ($candidato2 == $candidato3 && $candidato3 == $candidato4 && $candidato2 == $candidato4) {
        echo "<br><br> Los candidatos: <br><br> Yider Luna Joven <br> Franklin Alexander Vega <br> Votos en blanco <br><br> posseen la misma cantidad de Votos";
        return;
    }
}
?>

<?php

if (isset($_POST['reiniciarVotos'])) {
    // Vuelve a colocar los votos en 0.
    $_SESSION['candidatos'] = [0, 0, 0, 0];
    // O
    // session_destroy(); = Reinicia todo el sistema, este se utiliza cuando hay una gran cantidad de datos almacenados
    echo "Votos reiniciados";
}

?>