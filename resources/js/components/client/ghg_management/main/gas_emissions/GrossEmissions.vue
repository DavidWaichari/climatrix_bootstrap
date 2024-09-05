<template>
    <div>
        <h5 class="card-title">Gross Emissions <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <SemiDonutChart :chartColor="'#ffc107'" :label="'300,000'"
                :targetEmissions="'Target Emissions: 50'" :seriesData="[50]" />
        </div>
    </div>
</template>
<script setup>
import { onMounted } from 'vue';
import SemiDonutChart from '../../../../shared/charts/SemiDonutChart.vue';

onMounted(async()=>{
    const response = await axios.get('/api/ghg_management/gross_emmisions?scope=scope_five');
    console.log(response.data);
});
</script>

