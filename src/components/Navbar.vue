<template>
  <header>
    <!-- Sign In Modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
      <div
        class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto"
        style="max-width: 950px"
      >
        <div class="modal-content">
          <div class="modal-body px-0 py-2 py-sm-0">
            <button
              id="dismiss-modal-login"
              class="btn-close position-absolute top-0 end-0 mt-3 me-3"
              type="button"
              data-bs-dismiss="modal"
            ></button>
            <div class="row mx-0 align-items-center">
              <div class="col-md-6 border-end-md p-4 p-sm-5">
                <h2 class="h3 mb-4 mb-sm-5">Hey there!<br />Welcome back.</h2>
                <img
                  class="d-block mx-auto"
                  src="@/assets/images/signin.svg"
                  width="344"
                  alt="Illustartion"
                />
                <div class="mt-4 mt-sm-5">
                  Don't have an account?
                  <a
                    href="#signup-modal"
                    data-bs-toggle="modal"
                    data-bs-dismiss="modal"
                    >Sign up here</a
                  >
                </div>
              </div>
              <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                <a class="btn btn-outline-info w-100 mb-3" href="#"
                  ><i class="fab fa-google fs-lg me-1"></i>Sign in with
                  Google</a
                ><a class="btn btn-outline-info w-100 mb-3" href="#"
                  ><i class="fab fa-facebook-f fs-lg me-1"></i>Sign in with
                  Facebook</a
                >
                <div class="d-flex align-items-center py-3 mb-3">
                  <hr class="w-100" />
                  <div class="px-3">Or</div>
                  <hr class="w-100" />
                </div>
                <form
                  class="needs-validation"
                  id="form-login"
                  @submit.prevent="login()"
                >
                  <div
                    id="login-alert"
                    class="alert alert-danger d-none"
                    role="alert"
                  >
                    <span>{{ message }}</span>
                  </div>
                  <div class="mb-4">
                    <label class="form-label mb-2" for="signin-email"
                      >Email address</label
                    >
                    <input
                      v-model="credential.email"
                      name="email"
                      class="form-control"
                      type="email"
                      id="signin-email"
                      placeholder="Enter your email"
                      required
                    />
                  </div>
                  <div class="mb-4">
                    <div
                      class="
                        d-flex
                        align-items-center
                        justify-content-between
                        mb-2
                      "
                    >
                      <label class="form-label mb-0" for="signin-password"
                        >Password</label
                      ><a class="fs-sm" href="#">Forgot password?</a>
                    </div>
                    <div class="password-toggle">
                      <input
                        v-model="credential.password"
                        name="password"
                        class="form-control"
                        type="password"
                        id="signin-password"
                        placeholder="Enter password"
                        required
                      />
                      <label
                        class="password-toggle-btn"
                        aria-label="Show/hide password"
                      >
                        <input
                          class="password-toggle-check"
                          type="checkbox"
                          name="signin-password"
                        /><i
                          id="signin-password-icon"
                          class="bi bi-eye-slash"
                        ></i>
                      </label>
                    </div>
                  </div>
                  <button
                    v-if="loginActive"
                    id="sign-in-button"
                    class="btn btn-primary btn-lg w-100"
                    type="submit"
                  >
                    Sign in
                  </button>
                  <button
                    v-else
                    id="sign-in-button"
                    class="
                      btn btn-primary btn-lg
                      w-100
                      d-flex
                      justify-content-center
                    "
                    type="button"
                    :disabled="!loginActive"
                  >
                    <div class="loader-auth"></div>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up Modal-->
    <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
      <div
        class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto"
        style="max-width: 950px"
      >
        <div class="modal-content">
          <div class="modal-body px-0 py-2 py-sm-0">
            <button
              id="dismiss-modal-register"
              class="btn-close position-absolute top-0 end-0 mt-3 me-3"
              type="button"
              data-bs-dismiss="modal"
            ></button>
            <div class="row mx-0 align-items-center">
              <div class="col-md-6 border-end-md p-4 p-sm-5">
                <h2 class="h3 mb-4 mb-sm-5">
                  Join Finder.<br />Get premium benefits:
                </h2>
                <ul class="list-unstyled mb-4 mb-sm-5">
                  <li class="d-flex mb-2">
                    <i class="fas fa-check text-primary mt-1 me-2"></i
                    ><span>Add and promote your listings</span>
                  </li>
                  <li class="d-flex mb-2">
                    <i class="fas fa-check text-primary mt-1 me-2"></i
                    ><span>Easily manage your wishlist</span>
                  </li>
                  <li class="d-flex mb-0">
                    <i class="fas fa-check text-primary mt-1 me-2"></i
                    ><span>Leave reviews</span>
                  </li>
                </ul>
                <img
                  class="d-block mx-auto"
                  src="@/assets/images/signup.svg"
                  width="344"
                  alt="Illustartion"
                />
                <div class="mt-sm-4 pt-md-3">
                  Already have an account?
                  <a
                    href="#signin-modal"
                    data-bs-toggle="modal"
                    data-bs-dismiss="modal"
                    >Sign in</a
                  >
                </div>
              </div>
              <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                <a class="btn btn-outline-info w-100 mb-3" href="#"
                  ><i class="fab fa-google fs-lg me-1"></i>Sign in with
                  Google</a
                ><a class="btn btn-outline-info w-100 mb-3" href="#"
                  ><i class="fab fa-facebook-f fs-lg me-1"></i>Sign in with
                  Facebook</a
                >
                <div class="d-flex align-items-center py-3 mb-3">
                  <hr class="w-100" />
                  <div class="px-3">Or</div>
                  <hr class="w-100" />
                </div>
                <form
                  id="form-register"
                  class="needs-validation"
                  @submit.prevent="register()"
                >
                  <div
                    id="register-alert"
                    class="alert alert-danger d-none"
                    role="alert"
                  >
                    <span>{{ message }}</span>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="signup-name">Name</label>
                    <input
                      v-model="registrationData.name"
                      name="name"
                      class="form-control"
                      type="text"
                      id="signup-name"
                      placeholder="Enter your name"
                      required
                    />
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="signup-surname"
                      >Surname</label
                    >
                    <input
                      v-model="registrationData.surname"
                      name="surname"
                      class="form-control"
                      type="text"
                      id="signup-surname"
                      placeholder="Enter your surname"
                      required
                    />
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="signup-email"
                      >Email address</label
                    >
                    <input
                      v-model="registrationData.email"
                      class="form-control"
                      type="email"
                      id="signup-email"
                      placeholder="Enter your email"
                      required
                    />
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="signup-password"
                      >Password
                      <span class="fs-sm text-muted">min. 8 char</span></label
                    >
                    <div class="password-toggle">
                      <input
                        v-model="registrationData.password"
                        name="password"
                        class="form-control"
                        type="password"
                        id="signup-password"
                        minlength="8"
                        required
                      />
                      <label
                        id="password-register-show"
                        class="password-toggle-btn"
                        aria-label="Show/hide password"
                      >
                        <input
                          class="password-toggle-check"
                          type="checkbox"
                          name="signup-password"
                        /><i
                          id="signup-password-icon"
                          class="bi bi-eye-slash"
                        ></i>
                      </label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="signup-password-confirm"
                      >Confirm password</label
                    >
                    <div class="password-toggle">
                      <input
                        v-model="registrationData.password_confirmation"
                        name="password_confirmation"
                        class="form-control"
                        type="password"
                        id="signup-password-confirm"
                        minlength="8"
                        required
                      />
                      <label
                        id="password_confirmation-register-show"
                        class="password-toggle-btn"
                        aria-label="Show/hide password"
                      >
                        <input
                          class="password-toggle-check"
                          type="checkbox"
                          name="signup-password-confirm"
                        /><i
                          id="signup-password-confirm-icon"
                          class="bi bi-eye-slash"
                        ></i>
                      </label>
                    </div>
                  </div>
                  <div class="form-check mb-4">
                    <input
                      class="form-check-input"
                      name="agree-to-terms"
                      type="checkbox"
                      id="agree-to-terms"
                      required
                    />
                    <label class="form-check-label" for="agree-to-terms"
                      >By joining, I agree to the
                      <a href="#">Terms of use</a> and
                      <a href="#">Privacy policy</a></label
                    >
                  </div>
                  <button
                    v-if="registerActive"
                    class="btn btn-primary btn-lg w-100"
                    type="submit"
                  >
                    Sign up
                  </button>
                  <button
                    v-else
                    class="
                      btn btn-primary btn-lg
                      w-100
                      d-flex
                      justify-content-center
                    "
                    type="button"
                    :disabled="!registerActive"
                  >
                    <div class="loader-auth"></div>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
      data-scroll-header=""
    >
      <div class="container">
        <router-link class="navbar-brand me-3 me-xl-4" to="/">
          <img
            class="d-block"
            src="@/assets/images/logo-dark.svg"
            width="116"
            alt="Finder"
          />
        </router-link>
        <button
          class="navbar-toggler ms-auto"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <a
          v-if="userData.id"
          class="btn btn-sm text-primary d-none d-lg-block order-lg-3"
          @click="logout()"
        >
          <i class="fas fa-sign-out-alt me-2"></i>Logout
        </a>

        <a
          v-else
          class="btn btn-sm text-primary d-none d-lg-block order-lg-3"
          href="#signin-modal"
          data-bs-toggle="modal"
          ><i class="far fa-user me-2"></i>Sign in</a
        >

        <router-link
          class="btn btn-primary btn-sm ms-2 order-lg-3"
          to="/contacts"
        >
          <i class="fas fa-phone me-sm-2"></i
          ><span class="d-none d-sm-inline">Contacts Us</span>
        </router-link>
        <div
          class="collapse navbar-collapse order-lg-2 justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem">
            <!-- Menu items-->
            <li class="nav-item active">
              <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/opportunities"
                >Opportunity</router-link
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >About Us</a
              >
              <ul class="dropdown-menu">
                <li><router-link class="dropdown-item" to="/howitworks">How it works</router-link></li>
                <li><router-link class="dropdown-item" to="/faq">FAQ</router-link></li>
                <li><router-link class="dropdown-item" to="/contacts">Contacts</router-link></li>
              </ul>
            </li>
            <div v-if="userData.id">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Account</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <router-link
                      class="dropdown-item"
                      to="/profile/account-info"
                      >Account Info</router-link
                    >
                  </li>
                  <li>
                    <router-link
                      class="dropdown-item"
                      to="/profile/my-properties"
                      >My Properties</router-link
                    >
                  </li>
                  <li>
                    <router-link class="dropdown-item" to="/profile/payments"
                      >Pagamenti</router-link
                    >
                  </li>
                  <li>
                    <router-link class="dropdown-item" to="/profile/documents"
                      >Documenti</router-link
                    >
                  </li>
                  <li>
                    <router-link
                      class="dropdown-item"
                      to="/profile/notifications"
                      >Notifiche</router-link
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item d-lg-none">
                <a class="nav-link logout text-danger" @click="logout()"
                  ><i class="fas fa-sign-out-alt me-2"></i>Logout</a
                >
              </li>
            </div>
            <div v-else>
              <li class="nav-item d-lg-none">
                <a class="nav-link" href="#signin-modal" data-bs-toggle="modal"
                  ><i class="far fa-user me-2"></i>Sign in</a
                >
              </li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import store from "../store";

export default {
  name: "Navbar",

  data() {
    return {
      credential: {
        email: "",
        password: "",
      },

      registrationData: {
        name: "",
        surname: "",
        email: "",
        password: "",
        password_confirmation: "",
      },

      message: "",
      loginActive: true,
      registerActive: true,
    };
  },

  mounted() {
    // login and register password show/hide
    let showPasswordToggles = document.querySelectorAll(
      ".password-toggle-check"
    );

    showPasswordToggles.forEach((el) => {
      el.addEventListener("click", () => {
        let id = el.name;

        let inputChecked = document.querySelector("#" + id);

        let icon = document.querySelector("#" + id + "-icon");

        if (el.checked) {
          inputChecked.type = "text";
          icon.classList.remove("bi-eye-slash");
          icon.classList.add("bi-eye");
        } else {
          inputChecked.type = "password";
          icon.classList.remove("bi-eye");
          icon.classList.add("bi-eye-slash");
        }
      });
    });
  },

  props: {
    userData: Object,
  },

  methods: {
    login() {
      this.loginActive = false;
      let formLogin = document.querySelector("#form-login");
      let alert = document.querySelector("#login-alert");
      let showButton = document.querySelector(".password-toggle-btn");

      store
        .dispatch("login", this.credential)
        .then((response) => {
          this.loginActive = true;

          alert.classList.add("d-none");

          formLogin["email"].classList.remove("is-invalid");
          formLogin["password"].classList.remove("is-invalid");

          showButton.classList.remove("me-3");

          this.credential.email = "";

          this.credential.password = "";

          let dismissModal = document.querySelector("#dismiss-modal-login");

          dismissModal.click();
        })
        .catch((error) => {
          this.loginActive = true;

          let errors = error.response.data.message;

          this.message = errors;

          alert.classList.remove("d-none");

          if (errors) {
            formLogin["email"].classList.add("is-invalid");
            formLogin["password"].classList.add("is-invalid");

            showButton.classList.add("me-3");
          }
        });
    },

    register() {
      this.registerActive = false;
      let formRegister = document.querySelector("#form-register");
      let alert = document.querySelector("#register-alert");
      let showButtonPassword = document.querySelector(
        "#password-register-show"
      );
      let showButtonPasswordConfirmation = document.querySelector(
        "#password_confirmation-register-show"
      );
      store
        .dispatch("register", this.registrationData)
        .then((response) => {
          this.registerActive = true;
          formRegister["name"].classList.remove("is-invalid");
          formRegister["surname"].classList.remove("is-invalid");
          formRegister["password"].classList.remove("is-invalid");
          formRegister["password_confirmation"].classList.remove("is-invalid");

          alert.classList.add("d-none");
          showButtonPassword.classList.remove("me-3");
          showButtonPasswordConfirmation.classList.remove("me-3");

          this.registrationData.name = "";

          this.registrationData.surname = "";

          this.registrationData.email = "";

          this.registrationData.password = "";

          this.registrationData.password_confirmation = "";

          let dismissModal = document.querySelector("#dismiss-modal-register");
          dismissModal.click();
        })
        .catch((error) => {
          this.registerActive = true;

          if (error.response) {
            let message = error.response.data.message;
            let errors = error.response.data.errors;
            this.message = message;
            alert.classList.remove("d-none");

            Object.keys(errors).forEach(function (key) {
              if (key == "password") {
                formRegister["password"].classList.add("is-invalid");
                formRegister["password_confirmation"].classList.add(
                  "is-invalid"
                );

                showButtonPassword.classList.add("me-3");
                showButtonPasswordConfirmation.classList.add("me-3");
              } else {
                formRegister[key].classList.add("is-invalid");
              }
            });
          }
        });
    },

    getUser() {
      store.dispatch("getUser");
    },

    logout() {
      store.dispatch("logout");
    },
  },
};
</script>

<style>
.loader-auth {
  border: 5px solid #f3f3f3;
  border-top: 5px solid #fd5631;
  border-radius: 50%;
  width: 24px;
  height: 24px;
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
</style>