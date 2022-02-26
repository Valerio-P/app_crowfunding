<template>
  <!-- Page content-->
  <!-- Page container-->
  <div class="container-fluid mt-5 pt-5 p-0">
    <div class="row g-0 mt-n3">
      <!-- Page content-->
      <div
        class="
          col-12
          position-relative
          overflow-hidden
          pb-5
          pt-4
          px-3 px-xl-4 px-xxl-5
        "
      >
        <!-- Map popup-->
        <div class="map-popup invisible" id="map">
          <button
            class="btn btn-icon btn-light btn-sm shadow-sm rounded-circle"
            type="button"
            data-bs-toggle-class="invisible"
            data-bs-target="#map"
            id="mapClose"
          >
            <i class="fas fa-times fa-x2 fs-xs"></i>
          </button>
          <div
            class="interactive-map"
            data-map-options-json="api/json/map-options-real-estate-rent"
          ></div>
        </div>
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <router-link to="/">Home</router-link>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              All Properties
            </li>
          </ol>
        </nav>
        <!-- Title-->
        <div
          class="
            d-sm-flex
            align-items-center
            justify-content-between
            pb-3 pb-sm-4
          "
        >
          <h1 class="h2 mb-sm-0">Property for rent</h1>
          <a
            class="d-inline-block fw-bold text-decoration-none py-1"
            href="#"
            data-bs-toggle-class="invisible"
            data-bs-target="#map"
            id="buttonMap"
            ><i class="far fa-map me-2"></i>Map view</a
          >
        </div>
        <!-- Sorting-->
        <div
          class="
            d-flex
            flex-sm-row flex-column
            align-items-sm-center align-items-stretch
            my-2
          "
        >
          <div class="d-flex align-items-center flex-shrink-0">
            <label class="fs-sm me-2 pe-1 text-nowrap" for="sortby"
              ><i class="fas fa-sort-amount-up-alt text-muted mt-n1 me-2"></i>Sort
              by:</label
            >
            <select class="form-select form-select-sm" id="sortby">
              <option>Newest</option>
              <option>Popularity</option>
              <option>Low - High Price</option>
              <option>High - Low Price</option>
              <option>High rating</option>
              <option>Average Rating</option>
            </select>
          </div>
          <hr class="d-none d-sm-block w-100 mx-4" />
          <div
            class="d-none d-sm-flex align-items-center flex-shrink-0 text-muted"
          >
            <i class="fas fa-spinner me-2"></i
            ><span class="fs-sm mt-n1">{{ properties.length }} risultati</span>
          </div>
        </div>
        <!-- Catalog grid-->
        <div class="row g-4 py-4">
          <!-- Items-->
          <item
            v-for="property in properties"
            :key="property.id"
            :item="property"
          />
        </div>
        <!-- Pagination-->
        <nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
          <ul class="pagination mb-1">
            <li class="page-item d-sm-none">
              <span class="page-link page-link-static">1 / 5</span>
            </li>
            <li class="page-item active d-none d-sm-block" aria-current="page">
              <span class="page-link"
                >1<span class="visually-hidden">(current)</span></span
              >
            </li>
            <li class="page-item d-none d-sm-block">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item d-none d-sm-block">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item d-none d-sm-block">...</li>
            <li class="page-item d-none d-sm-block">
              <a class="page-link" href="#">8</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next"
                ><i class="bi bi-chevron-right"></i
              ></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
import { BASE_URL } from "../../app";

import Item from "../components/Opportunities/Item.vue";

import { tns } from "tiny-slider/src/tiny-slider";

import L from "leaflet/dist/leaflet";

export default {
  components: {
    Item,
  },

  data() {
    return {
      url: BASE_URL,
      properties: {},
    };
  },

  async created() {
    await axios.get(this.url + "/api/properties").then((response) => {
      this.properties = response.data;
    });

    this.properties.forEach((el) => {
      tns({
        container: "#property" + el.id,
        items: 1,
        controlsContainer: "#tns-controls" + el.id,
      });
    });
  },

  mounted() {
    let buttonMap = document.querySelector("#buttonMap");

    let mapClose = document.querySelector("#mapClose");

    let map = document.querySelector("#map");

    buttonMap.addEventListener("click", () => {
      if (map.classList.contains("invisible")) {
        map.classList.remove("invisible");
      } else {
        map.classList.add("invisible");
      }
    });

    mapClose.addEventListener("click", () => {
      if (map.classList.contains("invisible")) {
        map.classList.remove("invisible");
      } else {
        map.classList.add("invisible");
      }
    });

    let interactiveMap = document.querySelectorAll(".interactive-map");

    this.loadMap(interactiveMap);
  },

  methods: {
    loadMap(u) {
      if (0 !== u.length)
        for (var p, e = 0; e < u.length; e++)
          !(function (c) {
            var e = u[c].dataset.mapOptions,
              t = u[c].dataset.mapOptionsJson,
              d = void 0;
            if (e && "" !== e) {
              var a = JSON.parse(e),
                r =
                  a.mapLayer ||
                  "https://api.maptiler.com/maps/voyager/{z}/{x}/{y}.png?key=Vcba4x1sKTleZnsXzYyX",
                n = a.coordinates || [0, 0],
                o = a.zoom || 1,
                e = !1 !== a.scrollWheelZoom,
                i = a.markers,
                d = L.map(u[c], {
                  scrollWheelZoom: e,
                }).setView(n, o);
              if (
                (L.tileLayer(r, {
                  tileSize: 512,
                  zoomOffset: -1,
                  minZoom: 1,
                  attribution:
                    '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                  crossOrigin: !0,
                }).addTo(d),
                i)
              )
                for (p = 0; p < i.length; p++) {
                  var l = i[p].iconUrl,
                    s = i[p].className,
                    l = L.icon({
                      iconUrl: l || "/images/marker-icon.png",
                      iconSize: [25, 39],
                      iconAnchor: [12, 39],
                      shadowUrl: "/images/marker-shadow.png",
                      shadowSize: [41, 41],
                      shadowAnchor: [13, 41],
                      popupAnchor: [1, -28],
                      className: s,
                    }),
                    s = i[p].popup,
                    l = L.marker(i[p].coordinates, {
                      icon: l,
                    }).addTo(d);
                  s && l.bindPopup(s);
                }
            } else
              t && "" !== t
                ? fetch(t)
                    .then(function (e) {
                      return e.json();
                    })
                    .then(function (e) {
                      var t =
                          e.mapLayer ||
                          "https://api.maptiler.com/maps/voyager/{z}/{x}/{y}.png?key=Vcba4x1sKTleZnsXzYyX",
                        a = e.coordinates || [0, 0],
                        r = e.zoom || 1,
                        n = !1 !== e.scrollWheelZoom,
                        o = e.markers;
                      if (
                        ((d = L.map(u[c], {
                          scrollWheelZoom: n,
                        }).setView(a, r)),
                        L.tileLayer(t, {
                          tileSize: 512,
                          zoomOffset: -1,
                          minZoom: 1,
                          attribution:
                            '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                          crossOrigin: !0,
                        }).addTo(d),
                        o)
                      )
                        for (var i = 0; i < o.length; i++) {
                          var l = o[i].iconUrl,
                            s = o[i].className,
                            l = L.icon({
                              iconUrl: l || "/images/marker-icon.png",
                              iconSize: [25, 39],
                              iconAnchor: [12, 39],
                              shadowUrl: "/images/marker-shadow.png",
                              shadowSize: [41, 41],
                              shadowAnchor: [13, 41],
                              popupAnchor: [1, -28],
                              className: s,
                            }),
                            s = o[i].popup,
                            l = L.marker(o[i].coordinates, {
                              icon: l,
                            }).addTo(d);
                          s && l.bindPopup(s);
                        }
                    })
                : ((d = L.map(u[c]).setView([0, 0], 1)),
                  L.tileLayer(
                    "https://api.maptiler.com/maps/voyager/{z}/{x}/{y}.png?key=Vcba4x1sKTleZnsXzYyX",
                    {
                      tileSize: 512,
                      zoomOffset: -1,
                      minZoom: 1,
                      attribution:
                        '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                      crossOrigin: !0,
                    }
                  ).addTo(d));
          })(e);
    },
  },
};
</script>

<style>
</style>