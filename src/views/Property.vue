<template>
  <div class="page-wrapper">
    <!-- Page content-->
    <!-- Page header-->
    <section class="container pt-5 mt-5">
      <!-- Breadcrumb-->
      <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <router-link to="/">Home</router-link>
          </li>
          <li class="breadcrumb-item">
            <router-link to="/opportunities">All Properties</router-link>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Pine Apartments
          </li>
        </ol>
      </nav>
      <h1 class="h2 mb-2">Pine Apartments</h1>
      <p class="mb-2 pb-1 fs-lg">28 Jackson Ave Long Island City, NY 67234</p>
    </section>
    <!-- Gallery-->
    <section class="container overflow-auto mb-4 pb-3">
      <div
        class="row g-2 g-md-3 gallery"
        id="lightgallery"
        style="min-width: 30rem"
      >
        <div class="col-8">
          <a
            class="gallery-item rounded rounded-md-3"
            href="/img/06.dac40671.jpg"
          >
            <img
              src="@/assets/images/06.jpg"
              alt="Gallery thumbnail"
            />
          </a>
        </div>
        <div class="col-4">
          <a
            class="gallery-item rounded rounded-md-3 mb-2 mb-md-3"
            href="/img/06.dac40671.jpg"
            ><img
              src="@/assets/images/06.jpg"
              alt="Gallery thumbnail" /></a
          ><a
            class="gallery-item rounded rounded-md-3"
            href="/img/06.dac40671.jpg"
            ><img
              src="@/assets/images/06.jpg"
              alt="Gallery thumbnail"
          /></a>
        </div>
        <div class="col-12">
          <div class="row g-2 g-md-3">
            <div class="col">
              <a
                class="gallery-item rounded-1 rounded-md-2"
                href="/img/06.dac40671.jpg"
                ><img
                  src="@/assets/images/06.jpg"
                  alt="Gallery thumbnail"
              /></a>
            </div>
            <div class="col">
              <a
                class="gallery-item rounded-1 rounded-md-2"
                href="/img/06.dac40671.jpg"
                ><img
                  src="@/assets/images/06.jpg"
                  alt="Gallery thumbnail"
              /></a>
            </div>
            <div class="col">
              <a
                class="gallery-item rounded-1 rounded-md-2"
                href="/img/06.dac40671.jpg"
                ><img
                  src="@/assets/images/06.jpg"
                  alt="Gallery thumbnail"
              /></a>
            </div>
            <div class="col">
              <a
                class="gallery-item rounded-1 rounded-md-2"
                href="/img/06.dac40671.jpg"
                ><img
                  src="@/assets/images/06.jpg"
                  alt="Gallery thumbnail"
              /></a>
            </div>
            <div class="col">
              <a
                class="gallery-item more-item rounded-1 rounded-md-2"
                href="/img/06.dac40671.jpg"
                ><img
                  src="@/assets/images/06.jpg"
                  alt="Gallery thumbnail"
                /><span class="gallery-item-caption fs-base"
                  >+5 <span class="d-none d-md-inline">photos</span></span
                ></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Post content-->
    <section class="container mb-5 pb-1">
      <div class="row">
        <div class="col-md-7 mb-md-0 mb-4">
          <span class="badge bg-success me-2 mb-3">Verified</span
          ><span class="badge bg-info me-2 mb-3">New</span>
          <h2 class="h3 mb-4 pb-4 border-bottom">
            $2,000<span class="d-inline-block ms-1 fs-base fw-normal text-body"
              >/month</span
            >
          </h2>
          <!-- Overview-->
          <div class="mb-4 pb-md-3">
            <h3 class="h4">Overview</h3>
            <p class="mb-1">
              Lorem tincidunt lectus vitae id vulputate diam quam. Imperdiet non
              scelerisque turpis sed etiam ultrices. Blandit mollis dignissim
              egestas consectetur porttitor. Vulputate dolor pretium, dignissim
              eu augue sit ut convallis. Lectus est, magna urna feugiat sed
              ultricies sed in lacinia. Fusce potenti sit id pharetra vel
              ornare. Vestibulum sed tellus ullamcorper arcu.
            </p>
            <div class="collapse" id="seeMoreOverview">
              <p class="mb-1">
                Asperiores eos molestias, aspernatur assumenda vel corporis ex,
                magni excepturi totam exercitationem quia inventore quod amet
                labore impedit quae distinctio? Officiis blanditiis consequatur
                alias, atque, sed est incidunt accusamus repudiandae tempora
                repellendus obcaecati delectus ducimus inventore tempore harum
                numquam autem eligendi culpa.
              </p>
            </div>
            <a
              class="collapse-label collapsed"
              href="#seeMoreOverview"
              data-bs-toggle="collapse"
              data-bs-label-collapsed="Show more"
              data-bs-label-expanded="Show less"
              role="button"
              aria-expanded="false"
              aria-controls="seeMoreOverview"
            ></a>
          </div>
          <!-- Property Details-->
          <div class="mb-4 pb-md-3">
            <h3 class="h4">Property Details</h3>
            <ul class="list-unstyled mb-0">
              <li><b>Type: </b>apartment</li>
              <li><b>Apartment area: </b>56 sq.m</li>
              <li><b>Built: </b>2015</li>
              <li><b>Bedrooms: </b>4</li>
              <li><b>Bathrooms: </b>2</li>
              <li><b>Parking places: </b>2</li>
              <li><b>Pets allowed: </b>cats only</li>
            </ul>
          </div>
          <!-- Amenities-->
          <div class="mb-4 pb-md-3">
            <h3 class="h4">Amenities</h3>
            <ul
              class="
                list-unstyled
                row row-cols-lg-3 row-cols-md-2 row-cols-1
                gy-1
                mb-1
                text-nowrap
              "
            >
              <li class="col">
                <i class="fi-wifi mt-n1 me-2 fs-lg align-middle"></i>WiFi
              </li>
              <li class="col">
                <i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i
                >Heating
              </li>
              <li class="col">
                <i class="fi-dish mt-n1 me-2 fs-lg align-middle"></i>Dishwasher
              </li>
              <li class="col">
                <i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>Parking
                place
              </li>
              <li class="col">
                <i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>Air
                conditioning
              </li>
              <li class="col">
                <i class="fi-iron mt-n1 me-2 fs-lg align-middle"></i>Iron
              </li>
              <li class="col">
                <i class="fi-tv mt-n1 me-2 fs-lg align-middle"></i>TV
              </li>
              <li class="col">
                <i class="fi-laundry mt-n1 me-2 fs-lg align-middle"></i>Laundry
              </li>
              <li class="col">
                <i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>Security
                cameras
              </li>
            </ul>
            <div class="collapse" id="seeMoreAmenities">
              <ul
                class="
                  list-unstyled
                  row row-cols-lg-3 row-cols-md-2 row-cols-1
                  gy-1
                  mb-1
                  text-nowrap
                "
              >
                <li class="col">
                  <i class="fi-no-smoke mt-n1 me-2 fs-lg align-middle"></i>No
                  smocking
                </li>
                <li class="col">
                  <i class="fi-pet mt-n1 me-2 fs-lg align-middle"></i>Cats
                </li>
                <li class="col">
                  <i class="fi-swimming-pool mt-n1 me-2 fs-lg align-middle"></i
                  >Swimming pool
                </li>
                <li class="col">
                  <i class="fi-double-bed mt-n1 me-2 fs-lg align-middle"></i
                  >Double bed
                </li>
                <li class="col">
                  <i class="fi-bed mt-n1 me-2 fs-lg align-middle"></i>Single bed
                </li>
              </ul>
            </div>
            <a
              class="collapse-label collapsed"
              href="#seeMoreAmenities"
              data-bs-toggle="collapse"
              data-bs-label-collapsed="Show more"
              data-bs-label-expanded="Show less"
              role="button"
              aria-expanded="false"
              aria-controls="seeMoreAmenities"
            ></a>
          </div>
          <!-- Post meta-->
          <div class="mb-lg-5 mb-md-4 pb-lg-2 py-4 border-top">
            <ul class="d-flex mb-4 list-unstyled fs-sm">
              <li class="me-3 pe-3 border-end">
                Published: <b>Dec 9, 2020</b>
              </li>
              <li class="me-3 pe-3 border-end">Ad number: <b>681013232</b></li>
            </ul>
          </div>
        </div>
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 ms-lg-auto pb-1">
          <!-- Contact card-->
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <a
                  class="text-decoration-none"
                  href="real-estate-vendor-properties.html"
                  >
                  <h5 class="mb-1">Floyd Miles</h5>

                  <p class="text-body">Imperial Property Group Agent</p></a
                >
              </div>
              <ul class="list-unstyled border-bottom mb-4 pb-4">
                <li>
                  <a class="nav-link fw-normal p-0" href="tel:3025550107"
                    ><i class="fas fa-phone-alt mt-n1 me-2 align-middle opacity-60"></i
                    >(302) 555-0107</a
                  >
                </li>
                <li>
                  <a
                    class="nav-link fw-normal p-0"
                    href="mailto:test@email.com"
                    ><i class="fas fa-envelope mt-n1 me-2 align-middle opacity-60"></i
                    >test@email.com</a
                  >
                </li>
              </ul>
              <!-- Contact form-->
              <form class="needs-validation" novalidate>
                <div class="mb-3">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Your name*"
                    required
                  />
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
                <div class="mb-3">
                  <input
                    class="form-control"
                    type="email"
                    placeholder="Email*"
                    required
                  />
                  <div class="invalid-feedback">
                    Please provide valid email address!
                  </div>
                </div>
                <input
                  class="form-control mb-3"
                  type="tel"
                  placeholder="Phone"
                />
                <div class="input-group mb-3">
                  <input
                    class="form-control date-picker rounded pe-5"
                    type="text"
                    placeholder="Choose date"
                    data-datepicker-options='{"altInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d"}'
                  /><i
                    class="
                      fi-calendar
                      position-absolute
                      top-50
                      end-0
                      translate-middle-y
                      me-3
                    "
                  ></i>
                </div>
                <textarea
                  class="form-control mb-3"
                  rows="3"
                  placeholder="Message"
                  style="resize: none"
                ></textarea>
                <div class="form-check mb-4">
                  <input
                    class="form-check-input"
                    id="form-submit"
                    type="checkbox"
                    checked
                  />
                  <label class="form-check-label fs-sm" for="form-submit"
                    >Send news, tips and promos from Finder to my email.</label
                  >
                </div>
                <button
                  class="btn btn-lg btn-primary d-block w-100"
                  type="submit"
                >
                  Send request
                </button>
              </form>
            </div>
          </div>
          <!-- Location (Map)-->
          <div class="pt-2">
            <div class="position-relative mb-2">
              <iframe
                style="border: 0"
                loading="lazy"
                class="rounded-3"
                allowfullscreen
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6145424811048!2d-73.93999278406218!3d40.74850644331743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592979d4827f%3A0x3a5d8b3cf779f3b6!2s28%20Jackson%20Ave%2C%20Long%20Island%20City%2C%20NY%2011101%2C%20USA!5e0!3m2!1sen!2sua!4v1618074552281!5m2!1sen!2sua"
              >
              </iframe>
              <div
                class="
                  d-flex
                  w-100
                  h-100
                  align-items-center
                  justify-content-center
                  position-absolute
                  top-0
                  start-0
                "
              >
                <button
                  class="btn btn-primary stretched-link"
                  data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6145424811048!2d-73.93999278406218!3d40.74850644331743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592979d4827f%3A0x3a5d8b3cf779f3b6!2s28%20Jackson%20Ave%2C%20Long%20Island%20City%2C%20NY%2011101%2C%20USA!5e0!3m2!1sen!2sua!4v1618074552281!5m2!1sen!2sua"
                  data-iframe="true"
                  data-bs-toggle="lightbox"
                  id="google-map"
                >
                  <i class="fas fa-map me-2"></i>Get directions
                </button>
              </div>
            </div>
            <p class="mb-0 fs-sm text-center">
              28 Jackson Ave Long Island City, NY 67234
            </p>
          </div>
        </aside>
      </div>
    </section>
  </div>
</template>

<script>

export default {

  mounted() {
    lightGallery(document.getElementById("lightgallery"), {
      thumbnail: true,
      selector: ".gallery-item",
    });

    lightGallery(document.getElementById("google-map"), {
      selector: "this",
    });

  },
};
</script>

<style>
</style>