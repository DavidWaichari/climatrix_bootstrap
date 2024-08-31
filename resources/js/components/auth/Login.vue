<template>
    <main style="height: 100vh;">
        <div class="row h-100">
            <!-- Left Side: Image Background with Centered Content -->
            <div class="col-md-5 h-100"
                style="background-image: url('/assets/ui/images/sidebar.svg'); background-size:auto; background-repeat:repeat; background-position:center;">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <div class="d-flex align-items-center" style="padding-left: 20px;">
                        <div class="d-flex align-items-center justify-content-center fw-bold"
                            style="background-color: white; width: 5.5vw; height: 5.5vw; border-radius: 50%; margin-right: 0.6vw;">
                            <span style="color:#2ca55e; font-size: 4.5vw;">C</span>
                        </div>
                        <span class="text-white fw-bold" style="font-size: 4vw; margin-left: 0.5vw;">Climatric</span>
                    </div>
                    <p class="text-white" style="font-size:1.5vw; margin-left: 9vw;">Climate action, simplified!</p>
                </div>
            </div>
            <!-- Right Side: Green Background with Centered Content -->
            <div class="col-md-7 h-100 d-flex flex-column">
                <div class="row pt-4 m-2">
                    <div class="d-flex justify-content-end gap-3">
                        <h3 class="fw-bold text-success">Home</h3>
                        <h3 class="fw-bold text-success">Sign In</h3>
                    </div>
                </div>
                <div class="flex-grow-1 d-flex align-items-center justify-content-center">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="fw-bold text-success text-center"><i class="bi bi-key-fill"></i> Sign In</h3>
                                </div>
                                <!-- Vertical Form -->
                                <form class="row g-3" @submit.prevent="submitForm">
                                    <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Email* </label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Password*</label>
                                        <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-success">Forgot your password?</p>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked="" style="background-color: #2ca55e;">
                                        <label class="form-check-label" for="gridCheck2">
                                            Show password
                                        </label>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success rounded-pill">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
</template>


<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();
const submitForm = () => {
    router.push('/dashboard');
};
</script>
