<template>
  <div id="home">
    <hero />
    <services />
    <recently />
    <categories-icons :animazione="animazione" />
    <calculator />
    <partners />
    <agents />
  </div>
</template>

<script>
import Hero from "../components/HomePage/Hero.vue";
import CategoriesIcons from "../components/HomePage/CategoriesIcons.vue";
import Services from "../components/HomePage/Services.vue";
import Recently from "../components/HomePage/Recently.vue";
import Calculator from "../components/HomePage/Calculator.vue";
import Partners from "../components/HomePage/Partners.vue";
import Agents from "../components/HomePage/Agents.vue";

export default {
  name: "Home",
  components: {
    Hero,
    CategoriesIcons,
    Services,
    Recently,
    Calculator,
    Partners,
    Agents,
  },
  data() {
    return {
      animazione: false,
    };
  },

  mounted() {
    
    let height = screen.height;

    let hero = document.querySelector("#hero").getBoundingClientRect().height;

    let services = document
      .querySelector("#services")
      .getBoundingClientRect().height;

    let recently = document
      .querySelector("#recently")
      .getBoundingClientRect().height;

    if (hero) {
      window.addEventListener("scroll", () => {
        let windowY = window.top.scrollY;
        if (windowY > hero + services + recently - height + 250) {
          this.animazione = true;
        }
      });
    }
  },
};
</script>

<style>
</style>