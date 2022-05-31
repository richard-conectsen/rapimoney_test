document.addEventListener("DOMContentLoaded", () => {
  console.log("hi credit loan");
  creditCalculation();
});

const creditCalculation = () => {
  let typingTimer; //timer identifier
  let doneTypingInterval = 1000; //time in ms (1 seconds)

  const $inputMyLoan = document.getElementById("monto-rapi-credit");
  const $inputQuantityQuotas = document.getElementById("quantity-installments");
  const $inputBiweeklyFee = document.getElementById("cuota-quincenal");
  const $inputFirstPayment = document.getElementById("primer-pago");

  const biweekly = 14; //****payment date period
  const MAX_LOAN = 2000.0;

  const $alert = document.getElementById("my-alert"); //****alert box

  // on keyup, start the countdown
  $inputMyLoan.addEventListener("keyup", () => {
    clearTimeout(typingTimer);
    if ($inputMyLoan.value) {
      dateCalculation();
      typingTimer = setTimeout(doneTyping, doneTypingInterval);
      // console.log(typingTimer);
    } else {
      selectDisabled();
    }
  });

  // user is "finished typing," do something
  function doneTyping() {
    $inputBiweeklyFee.value = "";

    let amount = $inputMyLoan.value; //***credit amount entered
    // console.log("monto de credito" + amount);

    if (amount > 0.0 && amount <= MAX_LOAN) {
      $inputQuantityQuotas.removeAttribute("disabled");
      let loanConditions = numberBiweekly(amount);
      showBiweekly(loanConditions);

      $inputQuantityQuotas.addEventListener("change", () => {
        let option = $inputQuantityQuotas.value;
        // console.log(option);
        let quota = biweeklyQuota(amount, loanConditions, option);
        showQuota(quota);
      });
    } else {
      console.log("excediste el prestamo");
      $alert.style.display = "block";
      $alert.innerHTML = `<span style="color:yellow"><i class="fas fa-exclamation-triangle"></i> El prestamo máximo es s/ ${MAX_LOAN}</span> `;
      setTimeout(() => {
        $alert.style.display = "none";
      }, 5000);
      selectDisabled();
    }
  }

  function showQuota(quota) {
    // console.log("imprimo la cuota" + quota);

    if (!isNaN(quota) && quota != 0) {
      quota = parseFloat(quota).toFixed(2);
      $inputBiweeklyFee.value = "S/ " + quota.toString();
      // undefined
    } else {
      $inputBiweeklyFee.value = "";
    }
  }

  //CUOTA QUINCENAL=(MONTO/PALZO)+(MONTO*TCEQ)

  function biweeklyQuota(loan, { tceq }, option) {
    let fee;
    if (tceq != 0.0 && option != 0) {
      fee = parseFloat(loan / option) + parseFloat(loan * tceq);
      // console.log("calculando la cuota quincenal " + fee);

      return fee;
    } else {
      return 0;
    }
  }

  function selectDisabled() {
    $inputFirstPayment.value = `DD/MM/AAAA`;
    $inputBiweeklyFee.value = "";
    $inputQuantityQuotas.setAttribute("disabled", true);
    $inputQuantityQuotas.innerHTML = `<option selected value="0">---</option>`;
  }

  function dateCalculation() {
    let miFecha = new Date();
    miFecha.setDate(miFecha.getDate() + biweekly);
    $inputFirstPayment.value = `${miFecha.getDate()}/${
      miFecha.getMonth() + 1
    }/${miFecha.getFullYear()}`;
  }

  function numberBiweekly(loan) {
    if (!isNaN(loan)) {
      if (loan > 0.0 && loan <= 400.0) {
        return { term: 2, tceq: 0.05 };
      } else if (loan > 400.0 && loan <= 700.0) {
        return { term: 3, tceq: 0.05 };
      } else if (loan > 700.0 && loan <= 1000.0) {
        return { term: 5, tceq: 0.05 };
      } else if (loan > 1000.0 && loan <= 1300.0) {
        return { term: 6, tceq: 0.05 };
      } else if (loan > 1300.0 && loan <= 1700.0) {
        return { term: 7, tceq: 0.05 };
      } else if (loan > 1700.0 && loan <= 2000.0) {
        return { term: 8, tceq: 0.05 };
      } else if (loan > 2000.0) {
        return { term: 0, tceq: 0.0 };
      }
    }
  }

  function showBiweekly({ term }) {
    // console.log(term);
    if (term != 0) {
      $inputQuantityQuotas.innerHTML = `<option selected value="0">---</option>`;
      // console.log("plazos" + term);
      for (let index = 1; index <= term; index++) {
        $inputQuantityQuotas.innerHTML =
          $inputQuantityQuotas.innerHTML +
          `<option value="${index}">${index}</option> `;
      }
    }
  }
};
