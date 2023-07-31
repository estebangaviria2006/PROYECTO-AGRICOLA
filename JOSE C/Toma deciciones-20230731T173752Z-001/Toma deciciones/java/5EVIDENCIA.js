// Solicitar el turno de trabajo y el número de horas trabajadas al usuario
var turno = prompt("Ingrese el turno de trabajo (diurna/nocturna):");
var horasTrabajadas = parseInt(prompt("Ingrese el número de horas trabajadas:"));

turno = turno.toLowerCase ()
var tarifaHora = 0;

if (turno === "diurna") {
  tarifaHora = 10;
} else if (turno === "nocturna") {
  tarifaHora = 15;
} else {
  console.log("Turno no válido. Por favor, ingrese 'diurna' o 'nocturna'.");
}

// Calcular el valor a pagar
var valorPagar = tarifaHora * horasTrabajadas;


console.log("El valor a pagar es: $" + valorPagar);
