<template>
  <!-- Hero-->
  <section id="hero" class="container pt-5 my-5 pb-lg-4">
    <div class="row pt-0 pt-md-2 pt-lg-0">
      <div class="col-xl-7 col-lg-6 col-md-5 order-md-2 mb-4 mb-lg-3">
        <img src="images/hero-image.jpg" alt="Hero image" />
      </div>
      <div
        class="
          col-xl-5 col-lg-6 col-md-7
          order-md-1
          pt-xl-5
          pe-lg-0
          mb-3
          text-md-start text-center
        "
      >
        <h1 class="display-4 mt-lg-5 mb-md-4 mb-3 pt-md-4 pb-lg-2">
          Easy way to find <br />
          a perfect property
        </h1>
        <p class="position-relative lead me-lg-n5">
          We provide a complete service for the sale, purchase or rental of real
          estate. We have been operating more than 10 years. Search millions of
          apartments and houses on Finder.
        </p>
        <div
          class="
            d-sm-flex
            align-items-center
            justify-content-center justify-content-lg-start
            mt-3 mt-md-5
          "
        >
          <!-- Button -->
          <a href="#" class="btn btn-lg btn-danger-soft me-2 mb-4 mb-sm-0"
            >Get Started</a
          >
          <!-- Video button -->
          <a href="" class="ms-0 ms-sm-4 d-block">
            <div
              class="
                btn btn-round btn-primary-shadow
                mb-0
                me-3
                align-middle
                d-inline-block
              "
            >
              <div
                class="h-100 d-flex justify-content-center align-items-center"
              >
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="align-middle d-inline-block">
              <h6 class="mb-0 fw-normal">Watch video</h6>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Hero",
};
</script>


<style>
.btn-danger-soft {
  color: #d6293e;
  background-color: rgba(214, 41, 62, 0.1);
}
.btn-danger-soft:hover {
  color: #fff;
  background-color: #d6293e;
}
.btn-primary-shadow {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  color: #fff;
  -webkit-box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
  box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
  background-color: #066ac9;
}
.btn-primary-shadow:hover {
  color: #fff;
}
.btn-check:focus + .btn-primary-shadow,
.btn-primary-shadow:focus {
  -webkit-box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
  box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
}
.btn-round {
  height: 40px;
  width: 40px;
  line-height: 40px;
  border-radius: 50%;
  padding: 0;
  text-align: center;
}
.btn-round i {
  margin: 0;
}
.btn-round .fa-play {
  padding-left: 3px;
}
.btn-round.btn-lg,
.btn-group-lg > .btn-round.btn {
  height: 55px;
  width: 55px;
  line-height: 55px;
}
.btn-round.btn-sm,
.btn-group-sm > .btn-round.btn {
  height: 32px;
  width: 32px;
  line-height: 30px;
}
.btn-round.btn-sm i,
.btn-group-sm > .btn-round.btn i {
  font-size: 0.6rem;
}
</style>