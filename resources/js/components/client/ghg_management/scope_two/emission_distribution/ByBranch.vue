<template>
    <div>
        <h5 class="card-title">By Branch <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column">
            <!-- Pass props to BarChart component -->
            <BarChart
                :series="series"
                :colors="colors"
                :categories="labels"
            />
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios'; // Ensure axios is imported
import BarChart from '../../../../shared/charts/BarChart.vue';

// Define the props to pass to the LineChart component
const series = ref([{ name: 'Emissions', data: [] }]);
const colors = ['#4CAF50']; // Example color
const labels = ref([]);

// Fetch the data and format it
onMounted(async () => {
    try {
        const response = await axios.get('/api/ghg_management/gross_emmisions_by_branch?scope=scope_two');
        const data = response.data.data;
        console.log(data)
        // Map series and labels from API response
        labels.value = data.labels; // Fixed typo
        series.value = [{ name: 'Emissions', data: data.values.map(value => parseFloat(value.replace(/,/g, ''))) }];
    } catch (error) {
        console.error('Error fetching emissions data:', error);
    }
});
</script>
