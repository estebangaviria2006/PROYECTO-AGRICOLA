<form action="#" method="post">

<h1>Análisis de suelo</h1>

<h3>Ingrese PH (Acidez del suelo)</h3>
<input step="any" type="number" name="acidez">
<h3>Ingrese la Materia orgánica</h3>
<input step="any" type="number" name="materia">
<h3>Ingrese el Fosforo</h3>
<input step="any" type="float" name="fosforo">
<h3>Ingrese el Calcio</h3>
<input step="any" type="float" name="calcio"><br>
<h3>Ingrese el Magnesio</h3>
<input step="any" type="float" name="magnesio"><br>
<h3>Ingrese el Aluminio</h3>
<input step="any" type="float" name="aluminio"><br><br>
<button type="submit">Enviar</button>
<form>
    
<?php
$acidez = floatval($_POST['acidez']);
$materia = $_POST['materia'];
$fosforo = $_POST['fosforo'];
$calcio = $_POST['calcio'];
$magnesio = $_POST['magnesio'];
$aluminio = $_POST['aluminio'];
if ($acidez >= 5 && $acidez <= 5.5 &&
    $materia > 8 &&
    $fosforo > 30 &&
    $calcio > 0.9 &&
    $magnesio > 0.4 &&
    $aluminio < 1) {
        echo "<br>";
        echo "<br>";
        echo "APROBADO EL SUELO";
    } else{
        echo "<br>";
        echo "<br>";
        echo "NO APROBADO EL SUELO";
    }