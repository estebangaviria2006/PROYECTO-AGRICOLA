<form action = "#"method = "post">
    <input type="text" name=" dato1">
    <input type="text" name="dato2">
    <button type="submit"> Enviar </button>
</form>

<?php
$dato1 = $_POST['dato1'];
$dato2 = $_POST['dato2'];
$total = $dato1+$dato2;

echo "  El primer dato es: ".$dato1;
echo "<br>";
echo "  El segundo dato es: ".$dato2;
echo "<br>";
echo " La suma de los dos datos es: ".$total;

?>