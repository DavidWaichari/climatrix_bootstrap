<template>
    <div>
        <div class="pagetitle">
            <h1>Transition Risk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Transition Risk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <h2>Quantitative Risk Assessment</h2>
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <ScopeOne></ScopeOne>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <ScopeTwo></ScopeTwo>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-md-4">
                    <ScopeThree></ScopeThree>
                </div><!-- End Customers Card -->
            </div>

            <div class="row">
                <h2>Opportunities vs Threats</h2>
                <div class="card">
                    <div class="card-body p-0 pt-1">
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="riskMapsTab" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="risk-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-home" type="button" role="tab" aria-controls="risk-home"
                                    aria-selected="true">SSP 1</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="risk-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-profile" type="button" role="tab" aria-controls="risk-profile"
                                    aria-selected="false">SSP 2</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="risk-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-contact" type="button" role="tab" aria-controls="risk-contact"
                                    aria-selected="false">SSP 3</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="riskMapsTabContent">
                            <div class="tab-pane fade show active" id="risk-home" role="tabpanel"
                                aria-labelledby="risk-home-tab">
                            <ScopeOneOppThreats></ScopeOneOppThreats>
                            </div>
                            <div class="tab-pane fade" id="risk-profile" role="tabpanel"
                                aria-labelledby="risk-profile-tab">
                            <ScopeTwoOppThreats></ScopeTwoOppThreats>
                            </div>
                            <div class="tab-pane fade" id="risk-contact" role="tabpanel"
                                aria-labelledby="risk-contact-tab">
                            <ScopeThreeOppThreats></ScopeThreeOppThreats>
                            </div>
                        </div><!-- End Risk Maps Tabs -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import ScopeOne from '../risk_assessment/ScopeOneRisk.vue';
import ScopeTwo from '../risk_assessment/ScopeTwoRisk.vue';
import ScopeThree from '../risk_assessment/ScopeThreeRisk.vue';
import ScopeOneOppThreats from '../opportunities_threats/ScopeOneOppThreats.vue';
import ScopeTwoOppThreats from '../opportunities_threats/ScopeTwoOppThreats.vue';
import ScopeThreeOppThreats from '../opportunities_threats/ScopeThreeOppThreats.vue';
</script>
