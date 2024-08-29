<template>
    <div>
        <h5 class="card-title">By Branch <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column">
            <!-- Pass props to BarChart component -->
            <BarChart
                :series="branchSeries"
                :colors="branchColors"
                :categories="branchCategories"
            />
        </div>
    </div>
</template>

<script setup>
import BarChart from '../../../shared/charts/BarChart.vue';

// Define the data you want to pass as props
const branchSeries = [
    { data: [300, 500, 700, 1000, 1200] }
];

const branchColors = ['#4CAF50']; // Example color

const branchCategories = ['Branch 1', 'Branch 2', 'Branch 3', 'Branch 4', 'Branch 5'];

</script>
