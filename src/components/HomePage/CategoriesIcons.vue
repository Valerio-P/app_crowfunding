<template>
  <!-- Property categories-->
  <section class="container mb-5">
    <div
      id="categories-icon"
      class="row row-cols-lg-6 row-cols-sm-3 row-cols-2 g-3 g-xl-4"
    >
      <div class="col">
        <a
          class="
            icon-box
            card card-body
            h-100
            border-0
            shadow-sm
            card-hover
            h-100
            text-center
          "
          href=""
        >
          <div
            class="
              bg-faded-primary
              text-primary
              mb-3
              mx-auto
              d-flex
              align-items-center
              justify-content-center
            "
          >
            <h4 class="text-wrap nbr">{{ sostenitori }}</h4>
          </div>
          <h3 class="icon-box-title fs-base mb-0">Sostenitori</h3>
        </a>
      </div>
      <div class="col">
        <a
          class="
            icon-box
            card card-body
            h-100
            border-0
            shadow-sm
            card-hover
            h-100
            text-center
          "
          href=""
        >
          <div
            class="
              bg-faded-primary
              text-primary
              mb-3
              mx-auto
              d-flex
              align-items-center
              justify-content-center
            "
          >
            <h4 class="text-wrap nbr">{{ depositi }}</h4>
          </div>
          <h3 class="icon-box-title fs-base mb-0">Denaro Depositato</h3>
        </a>
      </div>
      <div class="col">
        <a
          class="
            icon-box
            card card-body
            h-100
            border-0
            shadow-sm
            card-hover
            h-100
            text-center
          "
          href=""
        >
          <div
            class="
              bg-faded-primary
              text-primary
              mb-3
              mx-auto
              d-flex
              align-items-center
              justify-content-center
            "
          >
            <h4 class="text-wrap nbr">{{ opportunita_restituite }}</h4>
          </div>
          <h3 class="icon-box-title fs-base mb-0">Opportinutità Restituite</h3>
        </a>
      </div>
      <div class="col">
        <a
          class="
            icon-box
            card card-body
            h-100
            border-0
            shadow-sm
            card-hover
            h-100
            text-center
          "
          href=""
        >
          <div class="bg-faded-primary text-primary mb-3 mx-auto">
            <h4 class="text-wrap nbr">{{ denaro_restituito }}</h4>
          </div>
          <h3 class="icon-box-title fs-base mb-0">Denaro Restituito</h3>
        </a>
      </div>
      <div class="col">
        <a
          class="
            icon-box
            card card-body
            h-100
            border-0
            shadow-sm
            card-hover
            h-100
            text-center
          "
          href=""
        >
          <div class="bg-faded-primary text-primary mb-3 mx-auto">
            <h4 class="text-wrap nbr">{{ opportunità_puibblicate }}</h4>
          </div>
          <h3 class="icon-box-title fs-base mb-0">Opportunità Pubblicate</h3>
        </a>
      </div>
      <div class="col">
        <div class="dropdown h-100">
          <a
            class="
              icon-box
              card card-body
              h-100
              border-0
              shadow-sm
              card-hover
              text-center
            "
            href="#"
            data-bs-toggle="dropdown"
          >
            <div
              class="
                bg-faded-primary
                text-primary
                mb-3
                mx-auto
                d-flex
                align-items-center
                justify-content-center
              "
            >
              <h4 id="percentuale" class="text-wrap nbr">{{ rendimento }}</h4>
            </div>
            <h3 class="icon-box-title fs-base mb-0">Rendimento Medio</h3>
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      sostenitori: 1100,
      depositi: 110000,
      opportunita_restituite: 100,
      denaro_restituito: 120000,
      opportunità_puibblicate: 120,
      rendimento: 11,
    };
  },
  props: {
    animazione: Boolean,
  },

  watch: {
    animazione: {
      handler: function (val, oldVal) {
        this.start(".nbr"); // call it in the context of your component object
      },
      deep: true,
    },
  },

  methods: {
    start(id) {
      function incNbrRec(i, endNbr, elt, speed) {
        if (i <= endNbr) {
          if (endNbr < 1000) {
            elt.innerHTML = i;
            setTimeout(function () {
              //Delay a bit before calling the function again.
              incNbrRec(i + 1, endNbr, elt);
            }, speed);
          } else if (endNbr >= 1000 && endNbr < 10000) {
            elt.innerHTML = i;
            setTimeout(function () {
              //Delay a bit before calling the function again.
              incNbrRec(i + 10, endNbr, elt);
            }, speed);
          } else {
            elt.innerHTML = i;
            setTimeout(function () {
              //Delay a bit before calling the function again.
              incNbrRec(i + 100, endNbr, elt);
            }, speed);
          }
        }
      }

      let elt = document.querySelectorAll(id);

      let endNbr = [];

      elt.forEach((el) => {
        endNbr.push(Number(el.innerHTML));
      });

      elt.forEach((el, index) => {
        incNbrRec(0, endNbr[index], el, 10);
      });
    },
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:600");

.nbr {
  font-family: "Montserrat", sans-serif;
  color: #fd5631;
}

#percentuale::after {
  content: "%";
}
</style>