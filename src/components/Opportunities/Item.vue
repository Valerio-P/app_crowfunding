<template>
  <div class="col-sm-6 col-xl-4">
    <div class="card shadow-sm card-hover border-0 h-100">
      <div class="tns-carousel-wrapper card-img-top card-img-hover">
        <div
          class="tns-controls"
          :id="'tns-controls' + item.id"
          aria-label="Carousel Navigation"
          tabindex="0"
        >
          <button
            type="button"
            data-controls="prev"
            tabindex="-1"
            aria-controls="tns1"
          >
            <i class="bi bi-chevron-left"></i></button
          ><button
            type="button"
            data-controls="next"
            tabindex="-1"
            aria-controls="tns1"
          >
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
        <router-link
          class="img-overlay"
          :to="{ path: '/opportunity/' + item.id }"
        ></router-link>
        <div class="position-absolute start-0 top-0 pt-3 ps-3">
          <span class="d-table badge bg-success mb-1">Verified</span
          ><span class="d-table badge bg-info">New</span>
        </div>
        <div class="content-overlay end-0 top-0 pt-3 pe-3">

        </div>
        <div class="tns-carousel-inner-property" :id="'property' + item.id">
          <img src="@/assets/images/06.jpg" alt="Image" /><img
            src="@/assets/images/06.jpg"
            alt="Image"
          />
        </div>
      </div>
      <div class="card-body position-relative pb-3">
        <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">
          Disponibile
        </h4>
        <h3 class="h6 mb-2 fs-base">
          <router-link
            class="nav-link stretched-link"
            :to="{ path: '/opportunity/' + item.id }"
            >{{ item.title }}</router-link
          >
        </h3>
        <p class="mb-2 fs-sm text-muted">{{ item.address }}</p>
        <div class="fw-bold">
          <i class="bi bi-cash-stack mt-n1 me-2 lead align-middle opacity-70"></i>€{{ item.request }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    item: Object,
  },
};
</script>

<style>
</style>