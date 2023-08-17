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
           /* Registra un evento a un objeto en específico */
formulario.addEventListener("submit", (event) => {
       /* cancela el evento, lo que significa que cualquier acción por defecto que deba producirse como resultado de este evento, no ocurrirá */
  event.preventDefault();
                            
  const marcaSeleccionada = parseInt(document.getElementById("marca").value);
                            /* La función parseInt comprueba el primer argumento, una cadena, e intenta devolver un entero de la base especificada */
  const cantidadVendida = parseInt(document.getElementById("cantidad").value);

  /* evalúa una expresión, comparando el valor de esa expresión con una instancia case , 
  y ejecuta declaraciones asociadas a ese case , así como las declaraciones en los case que siguen */
  switch (marcaSeleccionada) {

    /* una instancia case es usada para ser comparada con la expresión . Si la expresión coincide con el valor, 
    las declaraciones dentro de la instancia case se ejecutan hasta que se encuentre el final de la declaración una interrupción break . */
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

  resultado_Samsung.textContent = `Samsung: Cantidad: ${cantidadSamsung}`; 
  resultado_Motorola.textContent = `Motorola: Cantidad: ${cantidadMotorola}`; 
  resultado_Huawei.textContent = `Huawei: Cantidad: ${cantidadHuawei}`; 
                   /* representa el contenido de texto de un nodo y sus dencendientes */
                          /* nodo son elementos que son hijos directos, es decir sus descendientes inmediatos */
                            /* dencendientes son todos los elementos anidados de un elemento dado, incluyendo los hijos, sus hijos y así sucesivamente. */

  resultadoSamsung.textContent = `Valor Total: $${TotalSamsung}`; 
  resultadoMotorola.textContent = `Valor Total: $${TotalMotorola}`; 
  resultadoHuawei.textContent = `Valor Total: $${TotalHuawei}`; 

              /* restaura los elementos de un formulario a sus valores por defecto */
  formulario.reset();
});

function calcularValorTotal(cantidad, valorUnitario) {
  let valorTotal = cantidad * valorUnitario;
  if (cantidad > 10) {
    valorTotal *= 0.95;
  }
  return valorTotal;
}
console.log(alert("ingrese datos"))