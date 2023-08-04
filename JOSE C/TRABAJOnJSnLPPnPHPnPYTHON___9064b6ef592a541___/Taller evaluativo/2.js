const valorSamsung = 600000;
const valorMotorola = 500000;
const valorHuawei = 550000;

const formulario = document.getElementById("formulario");
const resultadoSamsung = document.getElementById("resultadoSamsung");
const resultadoMotorola = document.getElementById("resultadoMotorola");
const resultadoHuawei = document.getElementById("resultadoHuawei");

let cantidadSamsung = 0;
let cantidadMotorola = 0;
let cantidadHuawei = 0;

formulario.addEventListener("submit", (event) => {
  event.preventDefault();

  const marcaSeleccionada = parseInt(document.getElementById("marca").value);
  const cantidadVendida = parseInt(document.getElementById("cantidad").value);

  switch (marcaSeleccionada) {
    case 1:
      cantidadSamsung += cantidadVendida;
      break;
    case 2: 
      cantidadMotorola += cantidadVendida;
      break;
    case 3: 
      cantidadHuawei += cantidadVendida;
      break;
  }

  const TotalSamsung = calcularValorTotal(cantidadSamsung, valorSamsung);
  const TotalMotorola = calcularValorTotal(cantidadMotorola, valorMotorola);
  const TotalHuawei = calcularValorTotal(cantidadHuawei, valorHuawei);

  resultadoSamsung.textContent = `Samsung: Cantidad: ${cantidadSamsung}, Valor Total: $${TotalSamsung}`;
  resultadoMotorola.textContent = `Motorola: Cantidad: ${cantidadMotorola}, Valor Total: $${TotalMotorola}`;
  resultadoHuawei.textContent = `Huawei: Cantidad: ${cantidadHuawei}, Valor Total: $${TotalHuawei}`;

  formulario.reset();
});

function calcularValorTotal(cantidad, valorUnitario) {
  let valorTotal = cantidad * valorUnitario;
  if (cantidad > 10) {
    valorTotal *= 0.95; 
  }
  return valorTotal;
}
