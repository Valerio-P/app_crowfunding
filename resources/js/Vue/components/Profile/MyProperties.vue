<template>
  <div class="col-lg-8 col-md-7 mb-5">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h1 class="h2 mb-0">My Properties</h1>
    </div>
    <p class="pt-1 mb-4">
      Here you can see your property offers and edit them easily.
    </p>
    <!-- Nav tabs-->
    <ul class="nav nav-tabs border-bottom mb-4" role="tablist">
      <li class="nav-item mb-3">
        <a class="nav-link active" href="#" role="tab" aria-selected="true"
          ><i class="fas fa-clipboard-list me-2"></i>All</a
        >
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link" href="#" role="tab" aria-selected="false"
          ><i class="fas fa-briefcase me-2"></i>In lavorazione</a
        >
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link" href="#" role="tab" aria-selected="false"
          ><i class="fas fa-check-circle me-2"></i>Completati</a
        >
      </li>
    </ul>
    <!-- Item-->
    <div class="card card-hover card-horizontal border-0 shadow-sm mb-4">
      <a
        class="card-img-top"
        href="real-estate-single.html"
        style="background-image: url(http://localhost:8000/images/08.jpg)"
      >
        <div class="position-absolute start-0 top-0 pt-3 ps-3">
          <span class="d-table badge bg-info">New</span>
        </div>
      </a>
      <div class="card-body position-relative pb-3">
        <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
          <button
            class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm"
            type="button"
            id="contextMenu1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
            <li>
              <button class="dropdown-item" type="button">
                <i class="fi-edit opacity-60 me-2"></i>Options
              </button>
            </li>
          </ul>
        </div>
        <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">
          For rent
        </h4>
        <h3 class="h6 mb-2 fs-base">
          <a class="nav-link stretched-link" href="#"
            >Greenpoint Rentals | 85 sq.m</a
          >
        </h3>
        <p class="mb-2 fs-sm text-muted">
          1510 Castle Hill Ave Bronx, NY 10462
        </p>
        <div class="fw-bold">
          <i
            class="bi bi-cash-stack mt-n1 me-2 lead align-middle opacity-70"
          ></i
          >$1,330
        </div>
        <div
          class="
            d-flex
            align-items-center
            justify-content-center justify-content-sm-start
            border-top
            pt-3
            pb-2
            mt-3
            text-nowrap
          "
        >
          <span class="d-inline-block me-4 fs-sm">
            1
            <i class="ms-1 mt-n1 fs-lg text-muted">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 512 512"
              >
                <path
                  d="M476,240h-4V132a28.031,28.031,0,0,0-28-28H68a28.031,28.031,0,0,0-28,28V240H36A28.031,28.031,0,0,0,8,268V400a8,8,0,0,0,8,8H40a8,8,0,0,0,7.59-5.47L53.77,384H458.23l6.18,18.53A8,8,0,0,0,472,408h24a8,8,0,0,0,8-8V268A28.031,28.031,0,0,0,476,240ZM56,132a12.01,12.01,0,0,1,12-12H444a12.01,12.01,0,0,1,12,12V240H416V228a28.031,28.031,0,0,0-28-28H300a28.031,28.031,0,0,0-28,28v12H240V228a28.031,28.031,0,0,0-28-28H124a28.031,28.031,0,0,0-28,28v12H56Zm344,96v12H288V228a12.01,12.01,0,0,1,12-12h88A12.01,12.01,0,0,1,400,228Zm-176,0v12H112V228a12.01,12.01,0,0,1,12-12h88A12.01,12.01,0,0,1,224,228ZM34.23,392H24v-8H36.9ZM488,392H477.77l-2.67-8H488Zm0-24H24V352H488Zm0-32H24V268a12.01,12.01,0,0,1,12-12H476a12.01,12.01,0,0,1,12,12Z"
                />
              </svg>
            </i>
          </span>
          <span class="d-inline-block me-4 fs-sm">
            1
            <i class="ms-1 mt-n1 fs-lg text-muted">
              <svg
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="22"
                height="22"
                viewBox="0 0 100.5 100.5"
                xml:space="preserve"
              >
                <path
                  d="M91.751,56.361H24.94V20.617c0-4.047,3.29-7.34,7.334-7.34c3.635,0,6.653,2.658,7.232,6.13c-5.602,0.731-9.93,5.185-9.93,10.569c0,0.829,0.672,1.5,1.5,1.5h20.086c0.828,0,1.5-0.671,1.5-1.5c0-5.449-4.431-9.95-10.129-10.598c-0.615-5.119-4.977-9.102-10.259-9.102c-5.698,0-10.334,4.639-10.334,10.34V56.36H8.247c-0.828,0-1.5,0.671-1.5,1.5s0.672,1.5,1.5,1.5h6.426l7.312,29.226c0.167,0.667,0.767,1.136,1.455,1.136h53.122c0.688,0,1.288-0.468,1.455-1.136l7.312-29.226h6.421c0.828,0,1.5-0.671,1.5-1.5S92.58,56.361,91.751,56.361z M49.5,28.477H32.74c0.778-3.522,4.24-6.187,8.382-6.187C45.262,22.291,48.723,24.955,49.5,28.477z M75.392,86.723h-50.78l-6.846-27.362h64.472L75.392,86.723z"
                />
              </svg>
            </i>
          </span>
          <span class="d-inline-block fs-sm">
            1
            <i class="fas fa-warehouse ms-1 mt-n1 fs-lg text-muted"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>