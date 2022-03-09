<template>
  <div>
    <navbar :userData="userData" />
    <router-view />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";

import store from "./store";

import useAxios from "./bootstrap"

export default {
  name: "App",

  components: {
    Navbar,
  },

  async mounted() {

    this.getUser();

    useAxios.get("http://localhost:8000/sanctum/csrf-cookie").then( (error, response) => {

      console.log(error)

      console.log(response)

      console.log(response.config.headers["X-XSRF-TOKEN"])

    })


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
