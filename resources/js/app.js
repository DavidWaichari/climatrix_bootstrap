// resources/js/app.js

import './bootstrap';
import { createApp } from 'vue';
import router from './router'; // Import the router
import VueApexCharts from "vue3-apexcharts";

// Create the Vue app
const app = createApp({});

// Use the router instance
app.use(router);

app.use(VueApexCharts);
// Mount the app to the DOM
app.mount('#app');
