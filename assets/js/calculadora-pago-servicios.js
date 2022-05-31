document.addEventListener("DOMContentLoaded", () => {
  console.log("Discount payment calculator");
  effectiveCalculation();
});

const effectiveCalculation = () => {
  //setup before functions
  let typingTimer; //timer identifier
  let doneTypingInterval = 1000; //time in ms (1 seconds)

  const $myInput = document.getElementById("receipt-amount");
  const $yourSavings = document.getElementById("rapimoney-discount");
  const $yourPayment = document.getElementById("client-pays");
  // const DISCOUNT_RATE = 0.03; //****Percentage of discount that you save!
  const MAX_VALUE = 10000.0;

  const $alert = document.getElementById("my-alert"); //****alert box

  // on keyup, start the countdown
  $myInput.addEventListener("keyup", () => {
    clearTimeout(typingTimer);
    if ($myInput.value) {
      typingTimer = setTimeout(doneTyping, doneTypingInterval);
    } else {
      deactivateResults();
    }
  });

  // user is "finished typing," do something
  function doneTyping() {
    //do something
    // console.log("calculando...");
    let receiptValue = $myInput.value;
    // console.log(receiptValue);

    // let miTasa = calculoTasa();

    if (receiptValue > 0.0 && receiptValue <= MAX_VALUE) {
      let discountRate = rateCalculation(receiptValue);
      // console.log(discountRate);

      let descuento = descuentoPorcentual(receiptValue, discountRate);
      // console.log("el desc: " + descuento);

      if (!isNaN(descuento)) {
        let descuentoDos = parseFloat(descuento).toFixed(2);
        // console.log(descuentoDos);

        $yourSavings.value = "S/ " + descuentoDos.toString();
        // undefined
      }

      let calculatedPayment = parseFloat(receiptValue) - descuento;
      if (!isNaN(calculatedPayment)) {
        let paymentAmount = parseFloat(calculatedPayment).toFixed(2);
        // console.log(paymentAmount);

        $yourPayment.value = "S/ " + paymentAmount.toString();
        //NaN
      }
    } else {
      console.log("su monto excede el retiro ofrecido ");
      $alert.style.display = "block";
      $alert.innerHTML = `<span style="color:yellow"><i class="fas fa-exclamation-triangle"></i> Monto máximo de los recibos a pagar s/ ${MAX_VALUE} soles</span> `;
      setTimeout(() => {
        $alert.style.display = "none";
      }, 4000);
      deactivateResults();
    }
  }

  function rateCalculation(amount) {
    if (!isNaN(amount)) {
      if (amount > 0.0 && amount < 500.0) {
        return (rate = 0.02);
      } else if (amount >= 500.0 && amount <= 1000.0) {
        return (rate = 0.03);
      } else {
        return (rate = 0.04);
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
    $yourSavings.value = "";
    $yourPayment.value = "";
  }
};
