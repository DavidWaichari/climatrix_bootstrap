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
                <h2>Dashboard</h2>
                <div class="card">
                    <div class="card-body p-0 pt-2">
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-justified" type="button" role="tab" aria-controls="home"
                                    aria-selected="false" tabindex="-1">Physical risk 2050</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile"
                                    aria-selected="true">Physical Risk 2100</button>
                            </li>
                            <!-- <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false" tabindex="-1">Contact</button>
                            </li> -->
                        </ul>
                        <div class="tab-content pt-2" id="myTabjustifiedContent">
                            <div class="tab-pane fade" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                               <Dashboard></Dashboard>
                            </div>
                            <div class="tab-pane fade active show" id="profile-justified" role="tabpanel"
                                aria-labelledby="profile-tab">
                                Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia.
                                Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia
                                distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam
                                voluptatum dicta.
                            </div>
                            <div class="tab-pane fade" id="contact-justified" role="tabpanel"
                                aria-labelledby="contact-tab">
                                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque.
                                Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit
                                molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                            </div>
                        </div><!-- End Default Tabs -->

                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Dashboard from '../Dashboard.vue';

</script>
