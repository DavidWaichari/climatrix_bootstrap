<template>
    <div>
        <div id="chart">
            <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
        </div>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue';

// Define props
const props = defineProps({
    series: {
        type: Array,
        default: () => [{ name: 'Emissions', data: [] }]
    },
    colors: {
        type: Array,
        default: () => ['#2ca55e']
    },
    categories: {
        type: Array,
        default: () => []
    }
});

// Compute chart options based on props
const chartOptions = computed(() => ({
    chart: {
        type: 'line', // Ensures the chart is a line chart
        height: 350
    },
    colors: props.colors, // Use the colors passed as props
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth', // Makes the line smooth
        width: 4
    },
    xaxis: {
        categories: props.categories, // Use the categories passed as props
        labels: {
            style: {
                fontSize: '14px', // Increase the font size for x-axis labels
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                fontSize: '14px', // Increase the font size for y-axis labels
            }
        }
    }
}));
</script>
