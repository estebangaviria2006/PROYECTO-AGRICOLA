<form action = "#"method = "post">
<input type="text" name=" nombre">
<input type="text" name="sueldo">
<button type="submit"> Enviar </button>
</form>

<?php
$nombre = $_POST['nombre'];
$sueldo = $_POST['sueldo'];
$aumento = $sueldo * 0.15;
$valorFinal = $sueldo + $aumento;

echo "  Caballero ".$nombre;
echo " tienes un sueldo de ".$sueldo;
echo " obtienes un aumento de ".$aumento;
echo " obtienes un sueldo final de ".$valorFinal;

?>