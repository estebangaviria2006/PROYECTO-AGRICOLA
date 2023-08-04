<form action="#" method = "post"> 
    <input type="number" name = "edad" placeholder= "Escriba su edad">
    <button type = "submit">Enviar</button>
</form>

<?php

$edad = $_POST ['edad'];
echo "Ahora se que tienes ".$edad."años, gracias";
?>