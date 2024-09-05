<template>
    <div>
        <h5 class="card-title">By Time <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column">
            <!-- Pass props to LineChart component -->
            <LineChart
                :series="timeSeries"
                :colors="timeColors"
                :categories="timeCategories"
            />
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios'; // Ensure axios is imported
import LineChart from '../../../../shared/charts/LineChart.vue';

// Define the props to pass to the LineChart component
const timeSeries = ref([{ name: 'Emissions', data: [] }]);
const timeColors = ['#4CAF50']; // Example color
const timeCategories = ref([]);

// Fetch the data and format it
onMounted(async () => {
    try {
        const response = await axios.get('/api/ghg_management/gross_emmisions_by_time?scope=scope_two');
        const data = response.data.data;
        console.log(data);

        // Map series and categories from API response
        timeCategories.value = data.labels; // Fixed typo
        timeSeries.value = [{ name: 'Emissions', data: data.values.map(value => parseFloat(value.replace(/,/g, ''))) }];
    } catch (error) {
        console.error('Error fetching emissions data:', error);
    }
});
</script>
