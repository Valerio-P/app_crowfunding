<template>
  <!-- Partners (carousel)-->
  <section class="container mb-5 pb-2 pb-lg-4">
    <h2 class="h3 mb-4 text-center" :class="{ 'text-md-start': left }">Our partners</h2>
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
      <div class="tns-carousel-inner-partners">
        <div>
          <a class="swap-image" href="#"
            ><img
              class="swap-to"
              src="@/assets/images/01_color.svg"
              alt="Logo"
              width="196" /><img
              class="swap-from"
              src="@/assets/images/01_gray.svg"
              alt="Logo"
              width="196"
          /></a>
        </div>
        <div>
          <a class="swap-image" href="#"
            ><img
              class="swap-to"
              src="@/assets/images/02_color.svg"
              alt="Logo"
              width="196" /><img
              class="swap-from"
              src="@/assets/images/02_gray.svg"
              alt="Logo"
              width="196"
          /></a>
        </div>
        <div>
          <a class="swap-image" href="#"
            ><img
              class="swap-to"
              src="@/assets/images/03_color.svg"
              alt="Logo"
              width="196" /><img
              class="swap-from"
              src="@/assets/images/03_gray.svg"
              alt="Logo"
              width="196"
          /></a>
        </div>
        <div>
          <a class="swap-image" href="#"
            ><img
              class="swap-to"
              src="@/assets/images/04_color.svg"
              alt="Logo"
              width="196" /><img
              class="swap-from"
              src="@/assets/images/04_gray.svg"
              alt="Logo"
              width="196"
          /></a>
        </div>
        <div>
          <a class="swap-image" href="#"
            ><img
              class="swap-to"
              src="@/assets/images/05_color.svg"
              alt="Logo"
              width="196" /><img
              class="swap-from"
              src="@/assets/images/05_gray.svg"
              alt="Logo"
              width="196"
          /></a>
        </div>
        <div>
          <a class="swap-image" href="#"
            ><img
              class="swap-to"
              src="@/assets/images/06_color.svg"
              alt="Logo"
              width="196" /><img
              class="swap-from"
              src="@/assets/images/06_gray.svg"
              alt="Logo"
              width="196"
          /></a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { tns } from "tiny-slider/src/tiny-slider";

export default {

  props: {

    left: Boolean

  },

  data(){

    return {

      slider: {

      }

    }

  },

  mounted() {
    this.slider = tns({
      container: ".tns-carousel-inner-partners",
      items: 6,
      controls: false,
      responsive: {
        0: { items: 2 },
        500: { items: 4 },
        992: { items: 5, gutter: 16 },
        1200: { items: 6, gutter: 24 },
      },
      autoplay: true,
      autoplayButtonOutput: false,
      navPosition: "bottom",
    });
  },

  unmounted() {

    this.slider.destroy()

  }
};
</script>

<style>
</style>