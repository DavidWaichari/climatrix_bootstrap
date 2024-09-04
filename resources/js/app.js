import './bootstrap';
import { createApp } from 'vue';
import router from './router'; // Import the router
import VueApexCharts from "vue3-apexcharts";
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'; // Import PulseLoader component

// Create the Vue app
const app = createApp({});

// Use the router instance
app.use(router);

// Use VueApexCharts plugin
app.use(VueApexCharts);

// Register PulseLoader as a global component
app.component('pulse-loader', PulseLoader);

// Mount the app to the DOM
app.mount('#app');
