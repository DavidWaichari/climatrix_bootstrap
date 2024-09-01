<template>
    <div>
        <div class="pagetitle">
            <h1>GHG Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">GHG Management</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <h2>Scope 5 Emissions</h2>
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <GrossEmissions></GrossEmissions>
                        </div>
                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                           <CarbonOffsets></CarbonOffsets>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-md-4">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <NetEmissions></NetEmissions>
                        </div>
                    </div>

                </div><!-- End Customers Card -->

            </div>
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <ScopeOne></ScopeOne>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <ScopeTwo></ScopeTwo>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-md-4">

                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <ScopeThree></ScopeThree>
                        </div>
                    </div>

                </div><!-- End Customers Card -->

            </div>
            <div class="row">
                <h2>Scope 5 Emission Distribution</h2>
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <ByCategory></ByCategory>
                        </div>
                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                           <ByTime></ByTime>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-md-4">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <ByBranch></ByBranch>
                        </div>
                    </div>

                </div><!-- End Customers Card -->

            </div>
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <PerEmployee></PerEmployee>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <PerMillion></PerMillion>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-md-4">

                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <PerSquareFeet></PerSquareFeet>
                        </div>
                    </div>

                </div><!-- End Customers Card -->

            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import SemiDonutChart from '../../../shared/charts/SemiDonutChart.vue';
import GrossEmissions from './gas_emissions/GrossEmissions.vue';
import NetEmissions from './gas_emissions/NetEmissions.vue';
import CarbonOffsets from './gas_emissions/CarbonOffsets.vue';
import ScopeOne from './gas_emissions/ScopeOne.vue';
import ScopeTwo from './gas_emissions/ScopeTwo.vue';
import ScopeThree from './gas_emissions/ScopeThree.vue';
import ByCategory from './emission_distribution/ByCategory.vue';
import ByTime from './emission_distribution/ByTime.vue';
import ByBranch from './emission_distribution/ByBranch.vue';
import PerEmployee from './gas_emissions/PerEmployee.vue';
import PerMillion from './gas_emissions/PerMillion.vue';
import PerSquareFeet from './gas_emissions/PerSquareFeet.vue';


</script>
