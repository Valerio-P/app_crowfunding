import './bootstrap'

// bootstrap js

import 'bootstrap'

// lightgallery

import 'lightgallery.js';
import "lg-zoom.js/dist/lg-zoom.js";
import "lg-thumbnail.js/dist/lg-thumbnail.js";

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";

// vue

import { createApp } from 'vue'
import store from './store'
import router from './router'
import App from './App.vue';


// Firebase Credentials

const firebaseConfig = {
    apiKey: "AIzaSyBpNPorJS3NRxlsluBG3ETMW0Q4vmpFuO0",
    authDomain: "app-crowfunding-342808.firebaseapp.com",
    projectId: "app-crowfunding-342808",
    storageBucket: "app-crowfunding-342808.appspot.com",
    messagingSenderId: "899380352735",
    appId: "1:899380352735:web:804fa354fa2f47aa5a3b6a",
    measurementId: "G-B9GQ2Y93NB"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
getAnalytics(app);

createApp(App).use(store).use(router).mount('#app');