<form method="POST">
    <label for="a">ingrese "a":</label>
    <input type="number" name="a" id="a">
    <br>
    <label for="b">ingrese "b":</label>
    <input type="number" name="b" id="b">
    <br>
    <label for="b">ingrese "c":</label>
    <input type="number" name="c" id="c">
    <br><br>
    <button>calcular </button>
</form>
<?php
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

$raiz = sqrt(($b**2)- 4*$a*$c);
$x1 = (-($b)+ $raiz)/(2*$a);
$x2 = (-($b)- $raiz)/(2*$a);
echo "resultado : <br> ";
echo " el valor de x1 es : ","\n", $x1 ;
echo " el valor de x2 es : ","\n" ,$x2;