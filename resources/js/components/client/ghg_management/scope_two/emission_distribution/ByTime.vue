<template>
    <div>
        <h5 class="card-title">By Time <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column">
            <!-- Pass props to BarChart component -->
            <BarChart
                :series="timeSeries"
                :colors="timeColors"
                :categories="timeCategories"
            />
        </div>
    </div>
</template>
<script setup>
import BarChart from '../../../../shared/charts/BarChart.vue';

// Define the data you want to pass as props
const timeSeries = [
    { data: [300, 500, 700, 1000, 1200] }
];

const timeColors = ['#4CAF50']; // Example color

const timeCategories = ['Time 1', 'Time 2', 'Time 3', 'Time 4', 'Time 5'];

</script>
