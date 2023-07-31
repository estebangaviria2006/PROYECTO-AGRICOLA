function calcularDescuento(sueldo) {
    let descuento;
    
    if (sueldo <= 500000) {
      descuento = sueldo * 0.12;
    } else if (sueldo <= 1000000) {
      descuento = sueldo * 0.15;
    } else {
      descuento = sueldo * 0.18;
    }
    
    return descuento;
  }
  
  function calcularSueldoTotal(sueldo) {
    const descuento = calcularDescuento(sueldo);
    const sueldoTotal = sueldo - descuento;
    
    return sueldoTotal;
  }
  
  
  const sueldoInicial = parseInt(prompt("ingrese su sueldo: ")); 
  const sueldoTotal = calcularSueldoTotal(sueldoInicial);
  
  console.log('Sueldo inicial:', sueldoInicial);
  console.log('Descuento:', calcularDescuento(sueldoInicial));
  console.log('Sueldo total:', sueldoTotal);
  