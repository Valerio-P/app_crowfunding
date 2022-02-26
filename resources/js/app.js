import './bootstrap'

// bootstrap js

import 'bootstrap'

// lightgallery

import lightgallery from "lightgallery.js/dist/js/lightgallery.js";
import lg_zoom from "lg-zoom.js/dist/lg-zoom.js";
import lg_thumbnail from "lg-thumbnail.js/dist/lg-thumbnail.js";

// vue

import { createApp } from 'vue'
import store from './Vue/store'
import router from './Vue/router'
import App from './Vue/App.vue';


const app = createApp(App).use(store).use(router).mount('#vue');

export const BASE_URL = window.location.origin;