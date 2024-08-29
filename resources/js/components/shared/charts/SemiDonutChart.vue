<template>
    <div id="chart">
        <apexchart width="380" type="donut" :options="chartOptions" :series="series"></apexchart>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
    chartColor: {
        type: String,
        default: '#FFA500' // Default color
    },
    label: {
        type: String,
        default: '242,495.16' // Default label
    },
    targetEmissions: {
        type: String,
        default: 'Target Emissions: 0' // Default target emissions
    },
    seriesData: {
        type: Array,
        default: () => [44] // Default series data
    }
});

const series = ref(props.seriesData);

const chartOptions = computed(() => ({
    chart: {
        type: 'donut',
    },
    colors: [props.chartColor], // Dynamic color from props
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 90,
            donut: {
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: props.label, // Dynamic label from props
                        formatter: function (w) {
                            return props.targetEmissions; // Dynamic target emissions from props
                        }
                    }
                }
            }
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    tooltip: {
        enabled: false
    },
    states: {
        hover: {
            filter: {
                type: 'none'
            }
        }
    },
    stroke: {
        width: 0
    },
    grid: {
        padding: {
            bottom: -80
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            }
        }
    }]
}));
</script>
