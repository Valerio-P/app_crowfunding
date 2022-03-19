<template>
  <div>
    <navbar :userData="userData" />
    <router-view />
    <Footer />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";

import store from "./store";

export default {
  name: "App",

  components: {
    Navbar,
    Footer,
  },

  async mounted() {

    this.getUser();


  },

  computed: {
    userData() {
      return store.state.user.data;
    },
  },

  methods: {
    getUser() {
      store.dispatch("getUser");
    },
  },
};
</script>

<style>
@import "./assets/css/app.css";
</style>
