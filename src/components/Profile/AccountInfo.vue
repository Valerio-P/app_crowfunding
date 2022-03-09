<template>
  <div class="col-lg-8 col-md-7 mb-5">
    <div id="personal-info" class="mb-5">
      <h1 class="h2">Personal Info</h1>
      <div class="mb-2 pt-1">Your personal info is 50% completed</div>
      <div class="progress mb-4" style="height: 0.25rem">
        <div
          class="progress-bar bg-warning"
          role="progressbar"
          style="width: 50%"
          aria-valuenow="50"
          aria-valuemin="0"
          aria-valuemax="100"
        ></div>
      </div>
      <form @submit.prevent="updateProfileInformation()">
        <div id="profile-status-success" class="alert alert-success d-none">
          Profile updated successfully.
        </div>
        <div id="profile-status-error" class="alert alert-danger d-none">
          {{ status }}
        </div>
        <div class="border rounded-3 p-3 mb-4" id="personal-info">
          <!-- Name-->
          <div class="border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center justify-content-between">
              <div class="pe-2">
                <label class="form-label fw-bold">Full name</label>
                <div id="name-value">{{ profileData.name }}</div>
              </div>
              <div
                class="me-n3"
                data-bs-toggle="tooltip"
                title=""
                data-bs-original-title="Edit"
                aria-label="Edit"
              >
                <a
                  class="nav-link py-0"
                  href="#name-collapse"
                  data-bs-toggle="collapse"
                >
                  <i class="far fa-edit"></i>
                </a>
              </div>
            </div>
            <div class="collapse" id="name-collapse">
              <input
                v-model="profileData.name"
                name="name"
                class="form-control mt-3"
                type="text"
                data-bs-binded-element="#name-value"
                data-bs-unset-value="Not specified"
              />
            </div>
          </div>
          <!-- Email-->
          <div class="border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center justify-content-between">
              <div class="pe-2">
                <label class="form-label fw-bold">Email</label>
                <div id="email-value">{{ profileData.email }}</div>
              </div>
              <div
                class="me-n3"
                data-bs-toggle="tooltip"
                title=""
                data-bs-original-title="Edit"
                aria-label="Edit"
              >
                <a
                  class="nav-link py-0"
                  href="#email-collapse"
                  data-bs-toggle="collapse"
                >
                  <i class="far fa-edit"></i>
                </a>
              </div>
            </div>
            <div class="collapse" id="email-collapse">
              <input
                v-model="profileData.email"
                name="email"
                class="form-control mt-3"
                type="email"
                data-bs-binded-element="#email-value"
                data-bs-unset-value="Not specified"
              />
            </div>
          </div>
          <!-- Phone number-->
          <div class="border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center justify-content-between">
              <div class="pe-2">
                <label class="form-label fw-bold">Phone number</label>
                <div id="phone-value">
                  {{ profileData.phone ?? "Not specified" }}
                </div>
              </div>
              <div
                class="me-n3"
                data-bs-toggle="tooltip"
                title=""
                data-bs-original-title="Edit"
                aria-label="Edit"
              >
                <a
                  class="nav-link py-0"
                  href="#phone-collapse"
                  data-bs-toggle="collapse"
                >
                  <i class="far fa-edit"></i>
                </a>
              </div>
            </div>
            <div class="collapse" id="phone-collapse">
              <input
                v-model="profileData.phone"
                name="phone"
                class="form-control mt-3"
                type="text"
                placeholder="Enter phone number"
                data-bs-binded-element="#phone-value"
                data-bs-unset-value="Not specified"
              />
            </div>
          </div>
          <!-- Company name-->
          <div class="border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center justify-content-between">
              <div class="pe-2">
                <label class="form-label fw-bold">Company name</label>
                <div id="company-value">Not specified</div>
              </div>
              <div
                class="me-n3"
                data-bs-toggle="tooltip"
                title=""
                data-bs-original-title="Edit"
                aria-label="Edit"
              >
                <a
                  class="nav-link py-0"
                  href="#company-collapse"
                  data-bs-toggle="collapse"
                  ><i class="far fa-edit"></i
                ></a>
              </div>
            </div>
            <div class="collapse" id="company-collapse">
              <input
                name="company"
                class="form-control mt-3"
                type="text"
                data-bs-binded-element="#company-value"
                data-bs-unset-value="Not specified"
                placeholder="Enter company name"
              />
            </div>
          </div>
          <!-- Address-->
          <div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="pe-2">
                <label class="form-label fw-bold">Address</label>
                <div id="address-value">Not specified</div>
              </div>
              <div
                class="me-n3"
                data-bs-toggle="tooltip"
                title=""
                data-bs-original-title="Edit"
                aria-label="Edit"
              >
                <a
                  class="nav-link py-0"
                  href="#address-collapse"
                  data-bs-toggle="collapse"
                  ><i class="far fa-edit"></i
                ></a>
              </div>
            </div>
            <div class="collapse" id="address-collapse">
              <input
                name="address"
                class="form-control mt-3"
                type="text"
                data-bs-binded-element="#address-value"
                data-bs-unset-value="Not specified"
                placeholder="Enter address"
              />
            </div>
          </div>
        </div>

        <div
          class="
            d-flex
            align-items-center
            justify-content-between
            border-top
            mt-1
            pt-1
            pb-1
          "
        >
          <button class="btn btn-outline-primary" type="submit">
            Save changes
          </button>
        </div>
      </form>
    </div>

    <div id="password">
      <h1 class="h2">Password &amp; Security</h1>
      <p class="pt-1">Manage your password settings and secure your account.</p>
      <h2 class="h5">Password</h2>

      <form class="needs-validation pb-4" @submit.prevent="updatePassword()">
        <div id="password-success" class="alert alert-success d-none">
          Password updated successfully.
        </div>

        <div id="password-error" class="alert alert-danger d-none">
          {{ status }}
        </div>

        <div class="row align-items-end mb-2">
          <div class="col-sm-6 mb-2">
            <label class="form-label" for="current_password"
              >Current password</label
            >
            <div class="password-toggle">
              <input
                v-model="passwordData.current_password"
                type="password"
                id="current_password"
                class="form-control"
                name="current_password"
                required
              />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6 mb-3">
            <label class="form-label" for="password">New password</label>
            <div class="password-toggle">
              <input
                v-model="passwordData.password"
                type="password"
                id="password"
                class="form-control"
                name="password"
                required
                autocomplete="new-password"
              />
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label class="form-label" for="password-confirm"
              >Confirm password</label
            >
            <div class="password-toggle">
              <input
                v-model="passwordData.password_confirmation"
                class="form-control"
                type="password"
                id="password-confirm"
                name="password_confirmation"
                required
              />
            </div>
          </div>
        </div>
        <button class="btn btn-outline-primary" type="submit">
          Update password
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import useAxios from "../../bootstrap"

export default {
  data() {
    return {
      profileData: {
        name: "",
        email: "",
        phone: "",
      },

      passwordData: {
        currentPassword: "",
        password: "",
        password_confirmation: "",
      },

      status: "",
    };
  },

  created() {
    useAxios.get("/api/user").then((response) => {
      this.profileData.name = response.data.name;
      this.profileData.email = response.data.email;
      this.profileData.phone = response.data.phone;
    });
  },

  methods: {
    updateProfileInformation() {
      let profile_status_success = document.querySelector("#profile-status-success");

      let profile_status_error = document.querySelector("#profile-status-error");

      useAxios
        .put("/user/profile-information", this.profileData)
        .then((response) => {

          profile_status_success.classList.remove("d-none");

          setTimeout(() => {
            profile_status_success.classList.add("d-none");
          }, 10000);

          console.log("success");
        })
        .catch((error) => {
          this.status = error.response.data.message;

          profile_status_error.classList.remove("d-none");

          setTimeout(() => {

            profile_status_error.classList.add("d-none");
          }, 10000);

          console.log(error.response.data.message);
        });
    },

    updatePassword() {
      let password_success = document.querySelector("#password-success");

      let password_error = document.querySelector("#password-error");

      useAxios
        .put("/user/password", this.passwordData)
        .then((response) => {
          this.status = "Password updated successfully.";

          password_success.classList.remove("d-none");

          setTimeout(() => {
            password_success.classList.add("d-none");
          }, 10000);

          console.log("success");
        })
        .catch((error) => {
          this.status = error.response.data.message;

          password_error.classList.remove("d-none");

          setTimeout(() => {
            password_error.classList.add("d-none");
          }, 10000);

          console.log(error.response.data.message);
        });
    },
  },
};
</script>

<style>
</style>