<template>
    <div>
        <div class="pagetitle">
            <h1>Physical Risk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Physical Risk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <h2>Summary</h2>
                <div class="card">
                    <div class="card-body p-0 pt-2">
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="summaryTab" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="summary-ssp2-tab" data-bs-toggle="tab"
                                    data-bs-target="#summary-ssp2" type="button" role="tab" aria-controls="summary-ssp2"
                                    aria-selected="true">SSP 2</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="summary-ssp5-tab" data-bs-toggle="tab"
                                    data-bs-target="#summary-ssp5" type="button" role="tab" aria-controls="summary-ssp5"
                                    aria-selected="false">SSP 5</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="summaryTabContent">
                            <div class="tab-pane fade active show" id="summary-ssp2" role="tabpanel" aria-labelledby="summary-ssp2-tab">
                               <Dashboard></Dashboard>
                            </div>
                            <div class="tab-pane fade" id="summary-ssp5" role="tabpanel" aria-labelledby="summary-ssp5-tab">
                                <Dashboard></Dashboard>
                            </div>
                        </div><!-- End Summary Tabs -->
                    </div>
                </div>
            </div>

            <div class="row">
                <h2>Risk Maps</h2>
                <div class="card">
                    <div class="card-body p-0 pt-1">
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="riskMapsTab" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="risk-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-home" type="button" role="tab" aria-controls="risk-home"
                                    aria-selected="true">Main</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="risk-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-profile" type="button" role="tab" aria-controls="risk-profile"
                                    aria-selected="false">Wild Fire</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="risk-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-contact" type="button" role="tab" aria-controls="risk-contact"
                                    aria-selected="false">Earthquake</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="risk-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-contact" type="button" role="tab" aria-controls="risk-contact"
                                    aria-selected="false">SSP 2 25</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="risk-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#risk-contact" type="button" role="tab" aria-controls="risk-contact"
                                    aria-selected="false">SSP 5 25</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="riskMapsTabContent">
                            <div class="tab-pane fade show active" id="risk-home" role="tabpanel" aria-labelledby="risk-home-tab">
                                Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                            </div>
                            <div class="tab-pane fade" id="risk-profile" role="tabpanel" aria-labelledby="risk-profile-tab">
                                Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                            </div>
                            <div class="tab-pane fade" id="risk-contact" role="tabpanel" aria-labelledby="risk-contact-tab">
                                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
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
import Dashboard from '../Summary.vue';
</script>
