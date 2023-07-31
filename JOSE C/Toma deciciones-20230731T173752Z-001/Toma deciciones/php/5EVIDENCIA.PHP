<?php

$turno = readline(prompt: "ingrese su horario de trabajo (diurna/nocturna): ");
$horasTrabajadas = intval(readline(prompt: "ingrese las horas trabajadas: "));


$turno = strtolower($turno);
$tarifaDiurna = 10;
$tarifaNocturna = 15;


if ($turno== 'diurna') {
    $valorPagar = $tarifaDiurna * $horasTrabajadas;
} elseif ($turno== 'nocturna') {
    $valorPagar = $tarifaNocturna * $horasTrabajadas;
} else {
    $valorPagar = ("Turno no válido. Por favor, ingrese 'diurna' o 'nocturna'.");; 
}

// Mostramos el resultado
echo "El valor a pagar es: $" . $valorPagar;
?>
