<form action="#"method="post">
    <input type="text" name="nombre" placeholder="Ingrese su nombre"><br><br>
    <span> Ingrese su genero 1 = masculino y 2 = femenino y  3 = otro</span> 
    <input type="text" name="genero" placeholder="Ingrese su genero"><br><br>
    <input step="any" type="number" name="salario" placeholder="Ingrese su salario"><br><br>
    <span> Ingrese su tiempo de servicio en años</span>     
    <input step="any" type="number" name="tiempo_servicio" placeholder="Ingrese el tiempo de servicio"><br><br>
    <button type="submit">Enviar</button>
</form>

<?php
    $nombre = $_POST["nombre"];
    $genero = strtolower($_POST["genero"]);
    $salario = floatval($_POST["salario"]);
    $tiempo = floatval($_POST["tiempo_servicio"]);
    $aumento15 = ($salario*0.15);
    $bonificacion15 = ($salario+$aumento15);
    $aumento20 = ($salario*0.2);
    $bonificacion20 = ($salario+$aumento20);

    $genero = strtolower($genero);

    if($genero == "2" or $genero == "femenino" && $salario > 0){
        if ($tiempo > 5 ){
            echo('Hola '.$nombre. ' su salario basico es de '.$salario.' pero con la bonificacion del 20% su salario sera de '.$bonificacion20);
        }elseif($tiempo <= 5 && $tiempo > 0){
            echo('Hola '.$nombre. ' su salario basico es de '.$salario.' pero con la bonificacion del 15% su salario sera de '.$bonificacion15);
        }else{
            echo("Deberas completar por lo menos 1 año para obtener bonificación ".$nombre);
        }
    }
    
    if($genero == "3" or $genero == "otro" && $salario > 0){
        if ($tiempo > 5 ){
            echo('Hola '.$nombre. ' su salario basico es de '.$salario.' pero con la bonificacion del 20% su salario sera de '.$bonificacion20);
        }elseif($tiempo <= 5 && $tiempo > 0){
            echo('Hola '.$nombre. ' su salario basico es de '.$salario.' pero con la bonificacion del 15% su salario sera de '.$bonificacion15);
        }else{
            echo("Deberas completar por lo menos 1 año para obtener bonificación ".$nombre);
        }
    }

    if($genero == "1" or $genero == "masculino" && $salario > 0 ){
        if ($tiempo > 6 ){
            echo('Hola '.$nombre. ' su salario basico es de '.$salario.' pero con la bonificacion del 20% su salario sera de '.$bonificacion20);
        }elseif($tiempo <= 6 && $tiempo >= 1){
            echo('Hola '.$nombre. ' su salario basico es de '.$salario.' pero con la bonificacion del 15% su salario sera de '.$bonificacion15);
        }else{
            echo("Deberas completar por lo menos 1 año para obtener bonificación ".$nombre);
        }
    }
    echo "<br>";
    if ($genero != "2" and $genero != "femenino" and $genero != "1" and $genero != "masculino") {
        echo ("El genero ingresado no es valido");
    }
    if ($salario <= 0) {
        echo ("el salario no es valido");
    }
    if ($tiempo<=0) {
        echo("tiempo no valido");
    }

?>