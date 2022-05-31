document.addEventListener("DOMContentLoaded", () => {
  console.log("hello secured loan");
  warrantyCalculation();
});

const warrantyCalculation = () => {
  let typingTimer; //timer identifier
  let doneTypingInterval = 1000; //time in ms (1 seconds)

  const $inputMyLoan = document.getElementById("monto-rapi-garantia");
  const $inputQuantityQuotas = document.getElementById("quantity-quotas");
  const $inputLoanOffered = document.getElementById("prestamo-ofrecido");
  const $inputQuotaBiweekly = document.getElementById("quota-biweekly");

  const PERCENTAGE_OFFERED = 0.3; //****loan offered to clients!
  const MAX_LOAN = 7000.0;

  const $alert = document.getElementById("my-alert"); //****alert box

  // on keyup, start the countdown
  $inputMyLoan.addEventListener("keyup", () => {
    clearTimeout(typingTimer);
    if ($inputMyLoan.value) {
      typingTimer = setTimeout(doneTyping, doneTypingInterval);
      // console.log(typingTimer);
    } else {
      selectDisabled();
    }
  });

  // user is "finished typing," do something
  function doneTyping() {
    $inputQuotaBiweekly.value = "";

    let amount = $inputMyLoan.value; //****amount of the artifact received
    // console.log("monto ingresado" + amount);

    if (amount > 0.0 && amount <= MAX_LOAN) {
      $inputQuantityQuotas.removeAttribute("disabled");

      let myPayment = pagoPorPoncentaje(amount, PERCENTAGE_OFFERED);
      // console.log("prestamo ofrecido" + myPayment);
      showLoanOffered(myPayment);

      let loanConditions = numberBiweekly(myPayment);
      showBiweekly(loanConditions);

      $inputQuantityQuotas.addEventListener("change", () => {
        let option = $inputQuantityQuotas.value;
        // console.log(option);
        let quota = biweeklyQuota(myPayment, loanConditions, option);
        showQuota(quota);
      });
    } else {
      console.log("su monto excede el pretamo ofrecido ");
      $alert.style.display = "block";
      $alert.innerHTML = `<span style="color:yellow"><i class="fas fa-exclamation-triangle"></i> Su valor de garantia supera los s/ ${MAX_LOAN}</span> `;
      setTimeout(() => {
        $alert.style.display = "none";
      }, 5000);
      selectDisabled();
    }
  }
  // CUOTA QUINCENAL=(PRESTAMO OFRECIDO/palzo)+(PRESTAMO OFRECIDO*TCEQ)

  function biweeklyQuota(loan, { tceq }, term) {
    let fee;
    if (tceq != 0.0 && term != 0) {
      fee = parseFloat(loan / term) + parseFloat(loan * tceq);
      // console.log("calculando la cuota quincenal " + fee);

      return fee;
    } else {
      return 0;
    }
  }

  function showQuota(quota) {
    // console.log(quota);

    if (!isNaN(quota) && quota != 0) {
      quota = parseFloat(quota).toFixed(2);
      $inputQuotaBiweekly.value = "S/ " + quota.toString();
      // undefined
    } else {
      $inputQuotaBiweekly.value = "";
    }
  }

  function selectDisabled() {
    $inputLoanOffered.value = "";
    $inputQuotaBiweekly.value = "";
    $inputQuantityQuotas.setAttribute("disabled", true);
    $inputQuantityQuotas.innerHTML = `<option selected value="0">---</option>`;
  }

  function showLoanOffered(myPayment) {
    if (!isNaN(myPayment)) {
      myPayment = parseFloat(myPayment).toFixed(2);
      $inputLoanOffered.value = "S/ " + myPayment.toString();
      // undefined
    }
  }

  function pagoPorPoncentaje(amount, rate) {
    let pago;
    if (!isNaN(amount)) {
      if (amount <= 6666.7) {
        pago = parseFloat(amount) * rate;
      } else {
        pago = 2000.0;
      }
      return pago;
    }
  }

  function numberBiweekly(loan) {
    if (!isNaN(loan)) {
      if (loan > 0.0 && loan <= 500.0) {
        return { term: 2, tceq: 0.06 };
      } else if (loan > 500.0 && loan <= 800.0) {
        return { term: 3, tceq: 0.06 };
      } else if (loan > 800.0 && loan <= 1100.0) {
        return { term: 5, tceq: 0.06 };
      } else if (loan > 1100.0 && loan <= 1400.0) {
        return { term: 6, tceq: 0.06 };
      } else if (loan > 1400.0 && loan <= 1700.0) {
        return { term: 7, tceq: 0.06 };
      } else if (loan > 1700.0 && loan <= 2000.0) {
        return { term: 8, tceq: 0.06 };
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

// $inputQuantityQuotas.innerHTML = `<option selected value="0">---</option>
//                                             <option>1</option>
//                                             <option>2</option>`;
