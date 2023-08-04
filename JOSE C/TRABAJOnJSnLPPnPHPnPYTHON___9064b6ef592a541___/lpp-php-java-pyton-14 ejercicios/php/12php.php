<form action="#" method="post">
    <input type="email" name="correo" placeholder= "Escriba su correo:">
    <input type="password" name="contraseña" placeholder= "Escriba su contraseña:">
    <button type="submit">Enviar</button>
</form>

<?php
$correo = strtoupper($_POST['correo']);
$contraseña = $_POST['contraseña'];
$correo = strtolower($correo);

if ($correo == "fund@gmail.com" && $contraseña == "123456"){
    echo "Bienvenidos a fundamentos de la programacion";
}elseif ($correo != "fund@gmail.com" && $contraseña != "123456") {
    echo "Error en los datos ingresados"; 
}

?>