<template>
    <div>
        <h5 class="card-title">By Category <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column">
            <!-- Pass props to BarChart component -->
            <BarChart
                :series="categorySeries"
                :colors="categoryColors"
                :categories="categoryCategories"
            />
        </div>
    </div>
</template>
<script setup>
import BarChart from '../../../../shared/charts/BarChart.vue';

// Define the data you want to pass as props
const categorySeries = [
    { data: [300, 500, 700, 1000, 1200] }
];

const categoryColors = ['#4CAF50']; // Example color

const categoryCategories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'];

</script>
