<template>
    <div>
        <div id="chart">
            <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';

// Define props
const props = defineProps({
    series: {
        type: Array,
        default: () => [{ data: [400, 430, 448, 470, 540, 580] }]
    },
    colors: {
        type: Array,
        default: () => ['#2ca55e']
    },
    categories: {
        type: Array,
        default: () => ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy']
    }
});

const chartOptions = computed(() => ({
    chart: {
        type: 'bar',
        height: 350
    },
    plotOptions: {
        bar: {
            borderRadius: 4,
            borderRadiusApplication: 'end',
            horizontal: false, // Set horizontal to false to make the bars vertical
        }
    },
    colors: props.colors, // Use the colors passed as props
    dataLabels: {
        enabled: false
    },
    xaxis: {
        categories: props.categories, // Use the categories passed as props
        labels: {
            style: {
                fontSize: '12px', // Adjust the font size for x-axis labels
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                fontSize: '14px', // Adjust the font size for y-axis labels
            }
        }
    },
    // responsive: [{
    //     breakpoint: 768, // Adjust for medium screens
    //     options: {
    //         plotOptions: {
    //             bar: {
    //                 borderRadius: 4,
    //                 borderRadiusApplication: 'end',
    //             }
    //         },
    //         xaxis: {
    //             labels: {
    //                 style: {
    //                     fontSize: '10px' // Decrease font size on x-axis for medium screens
    //                 }
    //             }
    //         },
    //         yaxis: {
    //             labels: {
    //                 style: {
    //                     fontSize: '10px' // Decrease font size on y-axis for medium screens
    //                 }
    //             }
    //         }
    //     }
    // }, {
    //     breakpoint: 480, // Adjust for small screens
    //     options: {
    //         plotOptions: {
    //             bar: {
    //                 borderRadius: 4,
    //                 borderRadiusApplication: 'end',
    //             }
    //         },
    //         xaxis: {
    //             labels: {
    //                 style: {
    //                     fontSize: '8px' // Further decrease font size on x-axis for small screens
    //                 }
    //             }
    //         },
    //         yaxis: {
    //             labels: {
    //                 style: {
    //                     fontSize: '8px' // Further decrease font size on y-axis for small screens
    //                 }
    //             }
    //         }
    //     }
    // }]
}));


// Compute chart options based on props
// const chartOptions = computed(() => ({
//     chart: {
//         type: 'bar',
//         height: 350
//     },
//     plotOptions: {
//         bar: {
//             borderRadius: 4,
//             borderRadiusApplication: 'end',
//             horizontal: true,
//         }
//     },
//     colors: props.colors, // Use the colors passed as props
//     dataLabels: {
//         enabled: false
//     },
//     xaxis: {
//         categories: props.categories, // Use the categories passed as props
//         labels: {
//             style: {
//                 fontSize: '14px', // Increase the font size for x-axis labels
//             }
//         }
//     },
//     yaxis: {
//         labels: {
//             style: {
//                 fontSize: '12px', // Increase the font size for y-axis labels
//             }
//         }
//     }
// }));
</script>
