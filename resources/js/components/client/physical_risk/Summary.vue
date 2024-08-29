<template>
    <div>
        <div class="row g-1">
            <div class="col-md">
                <div class="card">
                    <div class="card-body profile-card pt-0 d-flex flex-column align-items-center p-0 m-0">
                        <Speedometer></Speedometer>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body profile-card pt-5 d-flex flex-column align-items-center">
                        <img src="/assets/ui/images/physical-risk/wildfires.svg" alt="Profile" class="mb-3">
                        <h5>Wild Fire</h5>
                        <h6>CAD 92.09M</h6>

                        <div class="social-links mt-2">
                            <h5>11.79%</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body profile-card pt-5 d-flex flex-column align-items-center">
                        <img src="/assets/ui/images/physical-risk/earthquake.svg" alt="Profile" class="mb-3">
                        <h5>Earthquake</h5>
                        <h6>CAD 92.09M</h6>

                        <div class="social-links mt-2">
                            <h5>11.79%</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body profile-card pt-5 d-flex flex-column align-items-center">
                        <img src="/assets/ui/images/physical-risk/floodsssp2.svg" alt="Profile" class="mb-3">
                        <h5>Flood Risk SSP2</h5>
                        <h6>CAD 92.09M</h6>

                        <div class="social-links mt-2">
                            <h5>11.79%</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body profile-card pt-5 d-flex flex-column align-items-center">
                        <img src="/assets/ui/images/physical-risk/floodsssp5.svg" alt="Profile" class="mb-3">
                        <h5>Sea Level Rise</h5>
                        <h6>CAD 92.09M</h6>

                        <div class="social-links mt-2">
                            <h5>11.79%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import Speedometer from './Speedometer.vue';
</script>


