document.addEventListener("DOMContentLoaded", () => {
  console.log("retirement calculator");
  effectiveCalculation();
});

const effectiveCalculation = () => {
  //setup before functions
  let typingTimer; //timer identifier
  let doneTypingInterval = 1000; //time in ms (1 seconds)

  const $myInput = document.getElementById("monto-rapi");
  const $montoComision = document.getElementById("monto-comision");
  const $montoTrans = document.getElementById("monto-trans");

  // const VIRTUAL_RATE = 0.1; //****Virtual retirement rate !
  const MAX_CASH = 5000.0;

  const $alert = document.getElementById("my-alert"); //****alert box

  // const $formRetiro = document.getElementById("tasa-retiro");

  // $formRetiro.addEventListener("change", calculoRapimoney, true);

  // function calculoRapimoney() {
  //   doneTyping();
  // }

  // on keyup, start the countdown
  $myInput.addEventListener("keyup", () => {
    clearTimeout(typingTimer);
    if ($myInput.value) {
      typingTimer = setTimeout(doneTyping, doneTypingInterval);
      // console.log(typingTimer);
    } else {
      deactivateResults();
    }
  });

  // user is "finished typing," do something
  function doneTyping() {
    //do something
    console.log("calculando...");
    let montoRapi = $myInput.value;
    console.log(montoRapi);

    // let miTasa = calculoTasa();

    if (montoRapi > 0.0 && montoRapi <= MAX_CASH) {
      let virtualRate = rateCalculation(montoRapi);
      console.log(virtualRate);
      let descuento = descuentoPorcentual(montoRapi, virtualRate);
      console.log("el desc: " + descuento);

      if (!isNaN(descuento)) {
        let descuentoDos = parseFloat(descuento).toFixed(2);
        console.log(descuentoDos);

        $montoComision.value = "S/ " + descuentoDos.toString();
        // undefined
      }

      let montoTransferido = parseFloat(montoRapi) - descuento;
      if (!isNaN(montoTransferido)) {
        let montoTransferidoDos = parseFloat(montoTransferido).toFixed(2);
        console.log(montoTransferidoDos);

        $montoTrans.value = "S/ " + montoTransferidoDos.toString();
        //NaN
      }
    } else {
      console.log("su monto excede el retiro ofrecido ");
      $alert.style.display = "block";
      $alert.innerHTML = `<span style="color:yellow"><i class="fas fa-exclamation-triangle"></i> Su retiro supera los s/ ${MAX_CASH} soles</span> `;
      setTimeout(() => {
        $alert.style.display = "none";
      }, 3000);
      deactivateResults();
    }
  }

  function rateCalculation(amount) {
    let rate;
    if (!isNaN(amount)) {
      if (amount > 0.0 && amount < 500.0) {
        return (rate = 0.12);
      } else if (amount >= 500.0 && amount <= 1000.0) {
        return (rate = 0.11);
      } else {
        return (rate = 0.1);
      }
    }
  }

  function descuentoPorcentual(monto, tasa) {
    let descuento;
    if (!isNaN(monto)) {
      descuento = parseFloat(monto) * tasa;
      return descuento;
    }
  }

  function deactivateResults() {
    $montoComision.value = "";
    $montoTrans.value = "";
  }

  // function calculoTasa() {
  //   let miTasa;
  //   let formaRetiro = document.formCalculadora.retiro.value;
  //   console.log(formaRetiro);

  //   if (formaRetiro == 0) {
  //     return (miTasa = 0.1);
  //   } else {
  //     return (miTasa = 0.12);
  //   }
  // }
};
