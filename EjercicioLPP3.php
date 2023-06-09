<form action = "#"method = "post">
    <input type="text" name=" dato1">
    <input type="text" name="dato2">
    <button type="submit"> Enviar </button>
</form>


<?php
$dato1 = $_POST['dato1'];
$dato2 = $_POST['dato2'];
$total1 = $dato1+$dato2;
$total2 = $dato1-$dato2;
$total3 = $dato1*$dato2;

echo "  dato1 es: ".$dato1;
echo "<br>";
echo "  dato2 es: ".$dato2;
echo "<br>";
echo "  la suma de los datos es: ".$total1;
echo "<br>";
echo " La resta de todos los datos es: ".$total2;
echo "<br>";
echo " La multiplicacion de todos los datos es: ".$total3;

?>