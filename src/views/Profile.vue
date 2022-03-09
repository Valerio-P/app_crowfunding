<template>
  <div class="page-wrapper" id="profile">
    <!-- Page content-->
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
      <!-- Breadcrumb-->
      <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <router-link to="/">Home</router-link>
          </li>
          <li class="breadcrumb-item">
            <router-link to="account-info">Account</router-link>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            {{ path }}
          </li>
        </ol>
      </nav>
      <!-- Page content-->
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
          <!-- Account nav-->
          <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
            <div
              class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4"
            >
              <i class="fas fa-user me-2 fa-2x text-dark"></i>
              <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                <h2 class="fs-3 mb-0">Annette Black</h2>
                <span><i class="star-rating"></i></span>
              </div>
            </div>
            <router-link
              class="btn btn-primary btn-lg w-100 mb-3"
              to="/contacts"
            >
              <i class="far fa-question-circle me-2"></i>Assistenza</router-link
            >
            <a
              class="btn btn-outline-secondary d-block d-md-none w-100 mb-3"
              href="#account-nav"
              data-bs-toggle="collapse"
              ><i class="fas fa-bars me-2"></i>Menu</a
            >
            <div class="collapse d-md-block mt-3" id="account-nav">
              <div class="card-nav">
                <router-link to="account-info" class="text-decoration-none">
                  <a class="card-nav-link buttonList" id="account-info">
                    <i class="fas fa-info-circle me-2"></i>
                    Account Info
                  </a>
                </router-link>
                <router-link to="my-properties" class="text-decoration-none">
                  <a class="card-nav-link buttonList" id="my-properties">
                    <i class="fas fa-home me-2"></i>
                    My Properties
                  </a>
                </router-link>
                <router-link to="payments" class="text-decoration-none">
                  <a class="card-nav-link buttonList" id="payments">
                    <i class="fas fa-money-check-alt me-2"></i>
                    Pagamenti
                  </a>
                </router-link>
                <router-link to="documents" class="text-decoration-none">
                  <a class="card-nav-link buttonList" id="documents">
                    <i class="fas fa-passport me-2"></i>
                    Documenti
                  </a>
                </router-link>
                <router-link to="notifications" class="text-decoration-none">
                  <a class="card-nav-link buttonList" id="notifications">
                    <i class="fas fa-bell me-2"></i>
                    Notifiche
                  </a>
                </router-link>
                <a class="card-nav-link text-danger logout" @click="logout()">
                  <i class="fas fa-sign-out-alt me-2"></i>
                  Logout
                </a>
              </div>
            </div>
          </div>
        </aside>
        <!-- Content-->
        <router-view />
      </div>
    </div>
  </div>
</template>

<script>
import store from "../store";

export default {
  data() {
    return {
      path: "",
    };
  },
  mounted() {
    this.path = this.$route.name;

    let currentHref = this.$route.href;

    let currentPath = currentHref.split("/")[2];

    document.querySelector("#" + currentPath).classList.add("active");
  },
  watch: {
    $route(uri) {
      this.path = this.$route.name;

      let currentHref = uri.href;

      let currentPath = currentHref.split("/");

      if (currentPath[1] == "profile") {
        let buttons = document.querySelectorAll(".buttonList");

        buttons.forEach((el) => {
          if (el.classList.contains("active")) {
            el.classList.remove("active");
          }
        });

        document.querySelector("#" + currentPath[2]).classList.add("active");
      }
    },
  },

  methods: {
    logout() {
      store.dispatch("logout").then((response) => {
        console.log("success")
      });
    },
  },
};
</script>

<style>
.logout:hover {
  cursor: pointer;
}
</style>