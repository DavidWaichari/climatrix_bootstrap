<template>
    <div class="speedometer-container">
        <vue-speedometer
            :width="chartWidth"
            :height="chartHeight"
            :needleHeightRatio="0.7"
            :value="777"
            currentValueText="Happiness Level"
            :customSegmentLabels="[
                { text: 'Very Bad', position: 'INSIDE', color: '#555', fontSize: '12px' },
                { text: 'Bad', position: 'INSIDE', color: '#555', fontSize: '12px' },
                { text: 'Ok', position: 'INSIDE', color: '#555', fontSize: '12px' },
                { text: 'Good', position: 'INSIDE', color: '#555', fontSize: '12px' },
                { text: 'Very Good', position: 'INSIDE', color: '#555', fontSize: '12px' },
            ]"
            :ringWidth="47"
            :needleTransitionDuration="3333"
            needleTransition="easeElastic"
            needleColor="#a7ff83"
            textColor="#d8dee9"
        />
    </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import VueSpeedometer from 'vue-speedometer';

const chartWidth = ref(300);  // Reduced base size
const chartHeight = ref(200); // Reduced base size

const updateChartSize = () => {
    const containerWidth = document.querySelector('.speedometer-container').offsetWidth;
    chartWidth.value = Math.min(Math.max(200, containerWidth - 40), 400); // Min 200, max 400
    chartHeight.value = chartWidth.value * 0.9; // Keep the aspect ratio
};

onMounted(() => {
    updateChartSize();
    window.addEventListener('resize', updateChartSize);
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', updateChartSize);
});
</script>

<style scoped>
.speedometer-container {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px;
    margin: 0;
    box-sizing: border-box;
}
</style>
