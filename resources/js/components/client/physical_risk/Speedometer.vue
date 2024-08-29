<template>
    <vue-speedometer
        :width="250"
        :height="225"
        :needleHeightRatio="0.7"
        :value="777"
        currentValueText="Happiness Level"
        :customSegmentLabels='[
            {
                text: "Very Bad",
                position: "INSIDE",
                color: "#555",
                fontSize: "10px", // Reduced font size
            },
            {
                text: "Bad",
                position: "INSIDE",
                color: "#555",
                fontSize: "10px", // Reduced font size
            },
            {
                text: "Ok",
                position: "INSIDE",
                color: "#555",
                fontSize: "10px", // Reduced font size
            },
            {
                text: "Good",
                position: "INSIDE",
                color: "#555",
                fontSize: "10px", // Reduced font size
            },
            {
                text: "Very Good",
                position: "INSIDE",
                color: "#555",
                fontSize: "10px", // Reduced font size
            },
        ]'
        :ringWidth="37"
        :needleTransitionDuration="3333"
        needleTransition="easeElastic"
        needleColor="#a7ff83"
        textColor="#d8dee9"
    />
</template>

<script setup>
import VueSpeedometer from "vue-speedometer";
</script>
