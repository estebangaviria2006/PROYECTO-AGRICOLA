<form action="#" method = "post"> 
    <input type="number" name = "numero" placeholder= "Escriba un numero entero">
    <button type = "submit">Enviar</button>
</form>

<?php

$numero = $_POST ['numero'];
echo "El numero introducido es: ".$numero." gracias";
?>