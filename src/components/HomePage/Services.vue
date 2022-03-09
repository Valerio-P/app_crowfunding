<template>
  <!-- Services-->
  <section id="services" class="container mb-5 mt-n3 mt-lg-0">
    <div
      class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2"
    >
      <div class="tns-carousel-inner row gx-4 mx-0 py-3">
        <div class="col">
          <div
            class="
              card card-hover
              border-0
              h-100
              pb-2 pb-sm-3
              px-sm-3
              text-center
            "
          >
            <img
              class="d-block mx-auto my-3"
              src="@/assets/images/buy.svg"
              width="256"
              alt="Illustration"
            />
            <div class="card-body">
              <h2 class="h4 card-title">Buy a property</h2>
              <p class="card-text fs-sm">
                Blandit lorem dictum in velit. Et nisi at faucibus mauris
                pretium enim. Risus sapien nisi aliquam egestas leo dignissim.
              </p>
            </div>
            <div class="card-footer pt-0 border-0">
              <a
                class="btn btn-outline-primary stretched-link"
                href=""
                >Find a home</a
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div
            class="
              card card-hover
              border-0
              h-100
              pb-2 pb-sm-3
              px-sm-3
              text-center
            "
          >
            <img
              class="d-block mx-auto my-3"
              src="@/assets/images/sell.svg"
              width="256"
              alt="Illustration"
            />
            <div class="card-body">
              <h2 class="h4 card-title">Sell a property</h2>
              <p class="card-text fs-sm">
                Amet, cras orci justo, tortor nisl aliquet. Enim tincidunt
                tellus nunc, nulla arcu posuere quis. Velit turpis orci
                venenatis.
              </p>
            </div>
            <div class="card-footer pt-0 border-0">
              <a class="btn btn-outline-primary stretched-link" href="#"
                >Place an ad</a
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div
            class="
              card card-hover
              border-0
              h-100
              pb-2 pb-sm-3
              px-sm-3
              text-center
            "
          >
            <img
              class="d-block mx-auto my-3"
              src="@/assets/images/rent.svg"
              width="256"
              alt="Illustration"
            />
            <div class="card-body">
              <h2 class="h4 card-title">Rent a property</h2>
              <p class="card-text fs-sm">
                Sed sed aliquet sed id purus malesuada congue viverra. Habitant
                quis lacus, volutpat natoque ipsum iaculis cursus.
              </p>
            </div>
            <div class="card-footer pt-0 border-0">
              <a
                class="btn btn-outline-primary stretched-link"
                href=""
                >Find a rental</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="mt-n1 mb-5 d-md-none" />
</template>

<script>
import { tns } from "tiny-slider/src/tiny-slider";
export default {
  mounted() {
    var slider = tns({
      container: ".tns-carousel-inner",
      items: 3,
      controls: false,
      responsive: { 0: { items: 1 }, 500: { items: 2 }, 768: { items: 3 } },
      autoplay: true,
      autoplayButtonOutput: false,
      navPosition: "bottom"
    });
  },
};
</script>

<style>
</style>