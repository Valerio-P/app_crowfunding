<template>
  <div>
    <navbar :userData="userData" />
    <router-view />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";

import store from "./store";

export default {
  name: "App",

  components: {
    Navbar,
  },

  mounted() {
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

</style>
