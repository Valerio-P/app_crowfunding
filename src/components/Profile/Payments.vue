<template>
  <div class="col-lg-8 col-md-7 mb-5">
    <h1 class="h2">Pagamenti</h1>
    <div class="mb-2 pt-1">
      Qui potrai ricaricare il tuo saldo così da poter investire nelle nostre
      operazioni
    </div>
    <div class="progress mb-4" style="height: 0.25rem">
      <div
        class="progress-bar bg-success"
        role="progressbar"
        style="width: 50%"
        aria-valuenow="50"
        aria-valuemin="0"
        aria-valuemax="100"
      ></div>
    </div>
    <div class="row pb-2 justify-content-center">
      <div id="user_info">
        <!-- Multiple inputs (addon on the left) -->
        <div class="row align-items-end mb-2">
          <div class="col-sm-6 mb-2">
            <label
              class="form-label leading-7 text-sm text-gray-600"
              for="amount"
              >Inserisci la cifra che vuoi ricaricare</label
            >
            <div class="input-group mb-3">
              <span class="input-group-text">€</span>
              <input
                v-model="amount"
                type="text"
                id="amount"
                class="form-control"
                name="amount"
                required
              />
            </div>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-sm-6 mb-3">
            <label class="form-label leading-7 text-sm text-gray-600" for="name"
              >Nome</label
            >
            <div>
              <input
                type="text"
                id="name"
                class="form-control"
                name="name"
                required
              />
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label
              class="form-label leading-7 text-sm text-gray-600"
              for="surname"
              >Cognome</label
            >
            <div>
              <input
                class="form-control"
                type="text"
                id="surname"
                name="surname"
              />
            </div>
          </div>

          <div class="col-sm-10 mb-3">
            <label
              class="form-label leading-7 text-sm text-gray-600"
              for="address"
              >Street Address</label
            >
            <div>
              <input
                class="form-control"
                type="text"
                id="address"
                name="address"
              />
            </div>
          </div>
          <div class="col-sm-2 mb-3">
            <label
              class="form-label leading-7 text-sm text-gray-600"
              for="address_number"
              >Address Number</label
            >
            <div>
              <input
                class="form-control"
                type="text"
                id="address_number"
                name="address_number"
              />
            </div>
          </div>

          <div class="col-sm-8 mb-3">
            <label class="form-label leading-7 text-sm text-gray-600" for="city"
              >City</label
            >
            <div>
              <input class="form-control" type="text" id="city" name="city" />
            </div>
          </div>

          <div class="col-sm-2 mb-3">
            <label
              class="form-label leading-7 text-sm text-gray-600"
              for="state"
              >State</label
            >
            <div>
              <input class="form-control" type="text" id="state" name="state" />
            </div>
          </div>

          <div class="col-sm-2 mb-3">
            <label
              class="form-label leading-7 text-sm text-gray-600"
              for="zip_code"
              >Zip Code</label
            >
            <div>
              <input
                class="form-control"
                type="text"
                id="zip_code"
                name="zip_code"
              />
            </div>
          </div>
        </div>

        <button id="continue_button" class="btn btn-primary">Continua</button>
      </div>

      <div id="payment_methods" class="d-none">
        <div v-if="loading" class="loader"></div>
        <!-- Card based accordion -->
        <div id="accordionCards" :class="{ 'd-none': loading }">
          <!-- Card -->
          <div class="card bg-secondary mb-2">
            <div class="card-body">
              <div
                class="d-flex justify-content-between mb-2 point"
                id="card-1"
                data-bs-toggle="collapse"
                data-bs-target="#cardCollapse1"
              >
                <div class="d-flex align-items-center">
                  <div
                    class="
                      accordion-active-button
                      d-flex
                      justify-content-center
                      align-items-center
                      me-2
                    "
                  >
                    <div
                      class="accordion-active-button-active"
                      :class="{ 'd-none': active1 }"
                    ></div>
                  </div>
                  <i class="fas fa-euro-sign text-info me-2"></i>
                  <span class="fs-sm text-dark opacity-80 ps-1">FIAT</span>
                </div>
                <span class="badge bg-faded-info rounded-pill fs-sm"
                  >Veloce</span
                >
              </div>
            </div>
            <div
              class="collapse show"
              id="cardCollapse1"
              data-bs-parent="#accordionCards"
            >
              <div class="card-body mt-n1 pt-0">
                <div id="stripe-element">
                  <form id="payment-form">
                    <div id="payment-element">
                      <!-- Elements will create form elements here -->
                    </div>
                    <button id="submit" class="btn btn-outline-primary mt-2">
                      Submit
                    </button>
                    <div id="error-message">
                      <!-- Display error message to your customers here -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Card -->
          <div class="card bg-secondary collapsed mb-2">
            <div class="card-body">
              <div
                class="d-flex justify-content-between mb-2 point"
                id="card-2"
                data-bs-toggle="collapse"
                data-bs-target="#cardCollapse2"
              >
                <div class="d-flex align-items-center">
                  <div
                    class="
                      accordion-active-button
                      d-flex
                      justify-content-center
                      align-items-center
                      me-2
                    "
                  >
                    <div
                      class="accordion-active-button-active"
                      :class="{ 'd-none': active2 }"
                    ></div>
                  </div>
                  <i class="fab fa-bitcoin text-warning me-2"></i>
                  <span class="fs-sm text-dark opacity-80 ps-1">CRYPTO</span>
                </div>
                <span class="badge bg-faded-warning rounded-pill fs-sm"
                  >Sicuro</span
                >
              </div>
            </div>
            <div
              class="collapse"
              id="cardCollapse2"
              data-bs-parent="#accordionCards"
            >
              <div class="card-body mt-n1 pt-0">
                <p class="fs-sm">
                  Cliccando sul bottone sottostante sarai rediretto ad una
                  pagina di pagamento fornita da Coinbase Commerce. Una volta
                  effettuata la transazione potrebbero volerci fino a 4 ore per
                  l'eleborazione del pagamento. Per qualsiasi dubbio o problema
                  si prega di contattare l'assistenza.
                </p>
                <div>
                  <a
                    class="btn btn-outline-primary mt-2"
                    :href="coinbase_payment_url"
                  >
                    Buy with Crypto
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card -->
          <div class="card bg-secondary collapsed mb-2">
            <div class="card-body">
              <div
                class="d-flex justify-content-between mb-2 point"
                id="card-3"
                data-bs-toggle="collapse"
                data-bs-target="#cardCollapse3"
              >
                <div class="d-flex align-items-center">
                  <div
                    class="
                      accordion-active-button
                      d-flex
                      justify-content-center
                      align-items-center
                      me-2
                    "
                  >
                    <div
                      class="accordion-active-button-active"
                      :class="{ 'd-none': active3 }"
                    ></div>
                  </div>
                  <i class="fas fa-credit-card text-success me-2"></i>
                  <span class="fs-sm text-dark opacity-80 ps-1"
                    >METODI SALVATI</span
                  >
                </div>
              </div>
            </div>
            <div
              class="collapse"
              id="cardCollapse3"
              data-bs-parent="#accordionCards"
            >
              <div class="card-body mt-n1 pt-0">
                <div class="form-check">
                  <div class="table-responsive border-0">
                    <table
                      class="
                        table table-dark-gray
                        align-middle
                        p-4
                        mb-0
                        table-hover
                      "
                    >
                      <!-- Table head -->
                      <thead>
                        <tr>
                          <th
                            scope="col"
                            class="border-0 rounded-start text-white"
                          ></th>
                          <th scope="col" class="border-0 text-white">Name</th>
                          <th scope="col" class="border-0 text-white">
                            Payment method
                          </th>
                          <th scope="col" class="border-0 text-white">
                            Status
                          </th>
                          <th
                            scope="col"
                            class="border-0 text-white rounded-end"
                          >
                            Date / Country
                          </th>
                        </tr>
                      </thead>
                      <!-- Table body -->
                      <tbody>
                        <payment-method
                          v-for="method in methods.card"
                          :key="method.id"
                          :name="method.billing_details.name"
                          :paymentMethod="'****' + method.card.last4"
                          :circuit="method.card.brand"
                          :status="true"
                          :date="
                            method.card.exp_month + '/' + method.card.exp_year
                          "
                        />
                        <payment-method
                          v-for="method in methods.sepa"
                          :key="method.id"
                          :name="method.billing_details.name"
                          :paymentMethod="'****' + method.sepa_debit.last4"
                          :circuit="method.type"
                          :status="true"
                          :date="
                            method.sepa_debit.country
                          "
                        />
                      </tbody>
                    </table>
                  </div>
                  <button class="btn btn-outline-primary mt-2">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import useAxios from "../../bootstrap"

import paymentMethod from "./Payments/PaymentMethod.vue";

export default {
  data() {
    return {
      intent: "",
      loading: true,
      active1: false,
      active2: true,
      active3: true,
      methods: {},
      amount: "",
      coinbase_payment_url: "",
    };
  },

  components: {
    paymentMethod,
  },

  created() {
    useAxios.get("/api/user/stripe/payment-methods").then((response) => {
      this.methods = response.data;
      console.log(response.data)
    });
  },

  async mounted() {
    this.activeButton();

    const continue_button = document.querySelector("#continue_button");

    const user_info = document.querySelector("#user_info");

    const payment_methods = document.querySelector("#payment_methods");

    continue_button.addEventListener("click", () => {
      user_info.classList.add("d-none");

      payment_methods.classList.remove("d-none");

      useAxios
        .post("/api/coinbase/create/charge", { amount: this.amount })
        .then((response) => {
          this.coinbase_payment_url = response.data.data.hosted_url;
        });
    });

    const stripe = window.Stripe("pk_test_d1AYVSPvMyUX7ie2tzQC70UA007ViAIJIm");

    await useAxios.get("/api/payment-intent").then((response) => {
      this.intent = response.data.intent;
    });

    const options = {
      clientSecret: this.intent.client_secret,
      // Fully customizable with appearance API.
      appearance: {
        /*...*/
      },
    };

    // Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 2
    const elements = stripe.elements(options);

    // Create and mount the Payment Element
    const paymentElement = elements.create("payment");

    paymentElement.mount("#payment-element");

    paymentElement.on("ready", (event) => {
      this.loading = false;
    });

    const form = document.getElementById("payment-form");

    form.addEventListener("submit", async (event) => {
      event.preventDefault();

      await stripe
        .confirmSetup({
          //`Elements` instance that was used to create the Payment Element
          elements,
          confirmParams: {
            return_url: "http://localhost:8000/complete",
          },
          redirect: "if_required",
        })
        .then((result) => {
          console.log(result);
          useAxios
            .post("/api/stripe/add-payment-method", {
              payment_method_id: result.setupIntent.payment_method,
            })
            .then((response) => {
              console.log(response);
            })
            .catch((error) => {
              console.error(error);
            });
        });
    });
  },

  methods: {
    activeButton() {
      let accordion = document.querySelector("#accordionCards");

      let card1 = document.querySelector("#card-1");
      let card2 = document.querySelector("#card-2");
      let card3 = document.querySelector("#card-3");

      accordion.addEventListener("click", () => {
        if (card1.classList.contains("collapsed")) {
          this.active1 = true;
        } else {
          this.active1 = false;
        }

        if (card2.classList.contains("collapsed")) {
          this.active2 = true;
        } else {
          this.active2 = false;
        }

        if (card3.classList.contains("collapsed")) {
          this.active3 = true;
        } else {
          this.active3 = false;
        }
      });
    },
  },
};
</script>

<style>
.loader {
  border: 5px solid #f3f3f3;
  border-top: 5px solid #fd5631;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.accordion-active-button {
  background: #fff;
  -webkit-box-shadow: 0 0.125rem 0.25rem rgb(29 58 83 / 40%);
  box-shadow: 0 0.125rem 0.25rem rgb(29 58 83 / 40%);
  width: 18px;
  height: 18px;
  border-radius: 100%;
}

.accordion-active-button-active {
  background: #066ac9;
  border-radius: 100%;
  width: 12px;
  height: 12px;
}

.table.table-dark-gray thead {
  background-color: #24292d !important;
  color: #fff !important;
}

.table > thead {
  vertical-align: bottom;
}
thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

.table td,
.table th {
  white-space: nowrap;
}
.table > :not(caption) > * > * {
  padding: 1rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

.rounded-start {
  border-bottom-left-radius: 0.325rem !important;
  border-top-left-radius: 0.325rem !important;
}

td h6,
td .h6 {
  font-size: 0.9375rem;
}

.point {
  cursor: pointer;
}

.text-gray-600 {
  --tw-text-opacity: 1;
  color: rgba(75, 85, 99, var(--tw-text-opacity));
}

.leading-7 {
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}
</style>