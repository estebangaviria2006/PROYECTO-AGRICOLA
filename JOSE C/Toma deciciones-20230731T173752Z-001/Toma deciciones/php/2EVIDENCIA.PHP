<form action="#" method="post">
    <input type="number" name="num1" placeholder= "Ingrese el primer número">
    <input type="number" name="num2" placeholder= "Ingrese el segundo número">
    <input type="number" name="num3" placeholder= "Ingrese el tercer número">
    <button type="submit">Enviar</button>
</form>

    <?php
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $num3 = $_POST['num3'];

if ($num1 < $num2 && $num1 < $num3) {
    $menor = $num1;
    echo "El menor número es: " .$menor;
} elseif ($num2 < $num1 && $num2 < $num3) {
    $menor = $num2;
    echo "El menor número es: " .$menor;
} elseif ($num3 < $num1 && $num3 < $num2){
    $menor = $num3;
    echo "El menor número es: " .$menor;
}