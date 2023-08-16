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

session_start();   /* crea una sesión o reanuda la actual basada en un identificador de sesión pasado */
if (isset($_POST['candidato'])) {  /* se utiliza para verificar si una variable está definida y su valor no es NULL */
    $candidato = intval($_POST['candidato']); /* recibe un argumento de cualquier tipo y devuelve su representación como entero */
    if (!isset($_SESSION['candidatos'])) {
        $_SESSION['candidatos'] = [0, 0, 0, 0];      /* es un array especial utilizado para guardar información a 
                                                     través de los requests que un usuario hace durante su visita a un sitio web o aplicación. */
    }
    $_SESSION['candidatos'][$candidato] += 1;
    var_dump($_SESSION['candidatos']);

    $candidato1 = $_SESSION['candidatos'][0];
    $candidato2 = $_SESSION['candidatos'][1];
    $candidato3 = $_SESSION['candidatos'][2];
    $candidato4 = $_SESSION['candidatos'][3];
    
    if ($candidato1 == $candidato2 && $candidato2 == $candidato3 && $candidato1 == $candidato3 && $candidato2 == $candidato4 && $candidato3 == $candidato4 && $candidato1 == $candidato4) {
        echo "Todos los candidatos llevan la misma cantidad de votos";
        return;
    }elseif ($candidato1 > $candidato2 && $candidato1 > $candidato3 && $candidato1 > $candidato4) {
        echo " El candidato:  Sergio Mauricio Zuñiga  posee la mayor cantidad de votos";
        return;
    }elseif ($candidato2 > $candidato1 && $candidato2 > $candidato3 && $candidato2 > $candidato4) {
        echo " El candidato:  Yider Luna Joven  posee la mayor cantidad de votos";
        return;
    }elseif ($candidato3 > $candidato1 && $candidato3 > $candidato2 && $candidato3 > $candidato4) {
        echo " El candidato:  Franklin Alexander Vega  posee la mayor cantidad de votos";
        return;
    }elseif ($candidato4 > $candidato1 && $candidato4 > $candidato2 && $candidato4 > $candidato3) {
        echo " Los Votos en blanco  posee la mayor cantidad de votos";
        return;
    }elseif ($candidato1 == $candidato2 && $candidato1 > $candidato3 && $candidato1 > $candidato4) {
        echo " Los candidatos:  Sergio Mauricio Zuñiga y  Yider Luna Joven  poseen los mismos votos";
        return;
    }elseif ($candidato2 == $candidato3 && $candidato2 > $candidato1 && $candidato2 > $candidato4) {
        echo " Los candidatos:  Yider Luna Joven y Franklin Alexander Vega  poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato3 && $candidato1 > $candidato2 && $candidato1 > $candidato4) {
        echo " Los candidatos:  Sergio Mauricio Zuñiga  y Franklin Alexander Vega  poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato4 && $candidato1 > $candidato2 && $candidato1 > $candidato3) {
        echo " Los candidatos:  Sergio Mauricio Zuñiga y Votos en blanco  poseen los mismos votos";
        return;
    }elseif ($candidato2 == $candidato4 && $candidato2 > $candidato1 && $candidato2 > $candidato3) {
        echo " Los candidatos:  Yiber Luna Joven y Votos en blanco  poseen los mismos votos";
        return;
    }elseif ($candidato3 == $candidato4 && $candidato3 > $candidato1 && $candidato3 > $candidato2) {
        echo " Los candidatos:  Franklin Alexander Vega y Votos en blanco  poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato2 && $candidato2 == $candidato3 && $candidato1 == $candidato3) {
        echo " Los candidatos:  Sergio Mauricio Zuñiga,  Yider Luna Joven y Franklin Alexander Vega  poseen los mismos votos";
        return;
    }elseif ($candidato1 == $candidato2 && $candidato2 == $candidato4 && $candidato1 == $candidato4) {
        echo " Los candidatos:  Sergio Mauricio Zuñiga,  Yider Luna Joven y Votos en blanco  posseen la misma cantidad de votos";
        return;
    }elseif ($candidato1 == $candidato3 && $candidato3 == $candidato4 && $candidato1 == $candidato4) {
        echo " Los candidatos:  Sergio Mauricio Zuñiga,  Franklin Alexander Vega y Votos en blanco  posseen la misma cantidad de votos";
        return;
    }elseif ($candidato2 == $candidato3 && $candidato3 == $candidato4 && $candidato2 == $candidato4) {
        echo " Los candidatos:  Yider Luna Joven,  Franklin Alexander y Vega  Votos en blanco  posseen la misma cantidad de Votos";
        return;
    }
}
?>

<?php
      /* se utiliza para verificar si una variable está definida y su valor no es NULL */
if (isset($_POST['reiniciarVotos'])) {
    // Vuelve a colocar los votos en 0.
    $_SESSION['candidatos'] = [0, 0, 0, 0];
    /* es un array especial utilizado para guardar información a 
     través de los requests que un usuario hace durante su visita a un sitio web o aplicación. */
    // O
    echo "Votos reiniciados";
}

?>