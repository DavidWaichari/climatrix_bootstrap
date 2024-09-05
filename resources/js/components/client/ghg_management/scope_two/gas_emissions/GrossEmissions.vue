<template>
    <div>
        <h5 class="card-title">Gross Emissions <span>| 12 Months</span></h5>
        <hr>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <SemiDonutChart :chartColor="'#ffc107'" :label=total_emissions
                :targetEmissions="'Target Emissions: 0'" :seriesData="[100]" />
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from 'vue';
import SemiDonutChart from '../../../../shared/charts/SemiDonutChart.vue';

const total_emissions = ref('0');
onMounted(async()=>{
    const response = await axios.get('/api/ghg_management/gross_emmisions?scope=scope_two');
    total_emissions.value= response.data.data.total_gross_emissions.toString();
});
</script>

