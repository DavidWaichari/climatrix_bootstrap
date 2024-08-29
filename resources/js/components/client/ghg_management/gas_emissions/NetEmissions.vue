<template>
    <div>
        <h5 class="card-title">Net Emissions <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <SemiDonutChart :chartColor="'#dbe7f5'" :label="'500,000'"
                :targetEmissions="'Target Emissions: 50'" :seriesData="[50]" />
        </div>
    </div>
</template>
<script setup>
import SemiDonutChart from '../../../shared/charts/SemiDonutChart.vue';
</script>
